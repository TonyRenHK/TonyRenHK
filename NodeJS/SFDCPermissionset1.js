var jsforce = require('jsforce');
var fs = require('fs');

var conn = new jsforce.Connection({
    loginUrl: 'https://test.salesforce.com'
});
var dataStored;
var stream = fs.createWriteStream("my_file.txt");

conn.login('tony.ren@elufasys.com.asisb6conf', 'Passw0rd4', function(err, res) {
    if (err) {
        return console.error(err);
    }
	
	var fullNames = [ 'ASI_JP_MFM_Power_User', 'ASI_CN_NPL_Delegated_Admin' ];
	conn.metadata.read('PermissionSet', 'ASI_JP_MFM_Power_User', function(err, metadata) {
		if (err) { console.error(err); }
		
		
		
		if(metadata !=null){
			console.log("Finished " );
				
			
			stream.once('open', function(fd) {
				stream.write('Test');
				stream.write(metadata);
				stream.end();
			});
			
			 for (var k in metadata) {//console.log(k);
			 	if(k=='fieldPermissions'){
			 		console.log(metadata[k].length);
			 			for (var i=0; i < metadata[k].length; i++) {
			 				if(metadata[k][i].readable=='true'){
			 					console.log(metadata[k][i]);
			 				}
			 				
			 			}
			 	}
			 }
		}
		
		/*
		
			
		if (metadata.done) {
			console.log("Finished " );
			
			var stream = fs.createWriteStream("my_file.txt");
			stream.once('open', function(fd) {
				stream.write('Test');
				stream.write(metadata);
				stream.end();
			});
		}
		
		
		for (var i=0; i < metadata.length; i++) {
			console.log('----------------------------------------------------');
			var meta = metadata[i];
			console.log('  meta  :'+meta);
			console.log("Full Name: " + meta.fullName);
			console.log("Fields count: " + meta.fields.length);
			for (var j=0; j < meta.fields.length; j++) {
				console.log("Fields Name: " + meta.fields[j].label);
			}
			console.log("Sharing Model: " + meta.sharingModel);
		}
		*/
	});
	
	



	
});

var jsforce = require('jsforce');
var conn = new jsforce.Connection({
    loginUrl: 'https://test.salesforce.com'
});
var dataStored;
conn.login('tony.ren@elufasys.com.asisb6conf', 'Passw0rd4', function(err, res) {
    if (err) {
        return console.error(err);
    }
	
	var records = [];
	conn.query("SELECT Id, Name,Body  FROM ApexClass WHERE name like 'ASI%' ", function(err, result) {
		if (err) { return console.error(err); }
		//console.log("total : " + result.totalSize);
		//console.log("fetched : " + result.records.length);
		for (var i=0; i < result.records.length; i++) {
			console.log('---------------------------------');
			console.log(result.records[i].Name);
			console.log(result.records[i].Body);
		}
	});

	/*
    conn.query('SELECT Id, Name FROM ASI_MFM_Plan__c', function(err, res) {
        if (err) {
            return console.error(err);
        }
        //console.log(res);
        //dataStored = res;
    });
	*/
	
	
	
	
	
	/*
	
	var records = [];
	conn.query("SELECT Id, Name FROM ASI_MFM_Project_Code__c", function(err, result) {
	if (err) { return console.error(err); }
	console.log("total : " + result.totalSize);
	console.log("fetched : " + result.records.length);
	console.log("done ? : " + result.done);
	
	  if (!result.done) {
		// you can use the locator to fetch next records set.
		// Connection#queryMore()
		console.log("next records URL : " + result.nextRecordsUrl);
	  }
	});




		var fullNames = [ 'ASI_KOR_VisitationPlanEditTest', 'ASI_MFM_KR_MassUploadProcess' ];
	conn.metadata.read('ApexClass', 'ASI_KOR_VisitationPlanEditTest', function(err, metadata) {
		if (err) { console.error(err); }
		console.log('----------------------------------------------------'+metadata);
			
		
	});
	
	
	
	//Second Query
	conn.sobject("ASI_KOR_Visitation_Plan__c").describe(function(err, meta) {
	  if (err) { return console.error(err); }
	  console.log('Label : ' + meta.label);
	  console.log('Num of Fields : ' + meta.fields.length);
	  // ...
	});
	
	
	var fullNames = [ 'ASI_MFM_AP_Code__c', 'ASI_MFM_A_C_Code__c' ];
	conn.metadata.read('CustomObject', fullNames, function(err, metadata) {
	if (err) { console.error(err); }
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
	});
	
	*/

	
});


/*
	

	
	
	
	

	var fullNames = [ 'ASI_JP_MFM_Power_User.permissionset' ];
	conn.metadata.read('PermissionSet', fullNames, function(err, metadata) {
	if (err) { 
	console.log('Failed!');
	console.error(err);
	}
	for (var i=0; i < metadata.length; i++) {
		var meta = metadata[i];
		console.log("Full Name: " + meta.label);
	}
	});
	
	
	
if (result.done) {
		var http = require("http");
		http.createServer(function(request, response) {

		// Send the HTTP header 
		// HTTP Status: 200 : OK
		// Content Type: text/plain
		response.writeHead(200, {
		'Content-Type': 'text/plain'
		});

		// Send the response body as "Hello World"
		response.end('YOU get : '+result.records.length+'Records');
		}).listen(8081);

		// Console will print the message
		console.log('Server running at http://127.0.0.1:8081/');


	}
*/

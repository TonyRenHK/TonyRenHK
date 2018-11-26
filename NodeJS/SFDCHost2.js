var jsforce = require('jsforce');
var conn = new jsforce.Connection({
    loginUrl: 'https://test.salesforce.com'
});
var dataStored;
conn.login('tony.ren@elufasys.com.asisb6conf', 'Passw0rd4', function(err, res) {
    if (err) {
        return console.error(err);
    }
	/*
    conn.query('SELECT Id, Name FROM ASI_MFM_Plan__c', function(err, res) {
        if (err) {
            return console.error(err);
        }
        //console.log(res);
        //dataStored = res;
    });
	*/
	var records = [];
	conn.query("SELECT Id, Name FROM ASI_MFM_Project_Code__c", function(err, result) {
	if (err) { return console.error(err); }
	console.log("total : " + result.totalSize);
	console.log("fetched : " + result.records.length);
	console.log("done ? : " + result.done);
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
	  if (!result.done) {
		// you can use the locator to fetch next records set.
		// Connection#queryMore()
		console.log("next records URL : " + result.nextRecordsUrl);
	  }
	});
	
	
	
	//Second Query

  
  
});




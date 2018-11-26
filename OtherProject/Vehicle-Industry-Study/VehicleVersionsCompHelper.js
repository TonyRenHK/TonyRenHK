({
    
    doInit : function(component, event) {
        var ResultObject;
        //https://elufa-sdfc-poc-dev-ed.lightning.force.com/auradocs/reference.app#
        
        
        document.title = "Vehicle Manage All Page!";
        var action = component.get("c.GetVehicleCompare");
        
        
        action.setCallback(this, function(response) {
            var state = response.getState();
            if (state === "SUCCESS") {
                
                //console.log(response.getReturnValue());
                ResultObject=response.getReturnValue();
                component.set('v.counts', response.getReturnValue());
                
                var displayList=[];
                for(var i=0;i<ResultObject.VehicleList.length;i++){  
                    if(i<12){ 
                        var temp = new Object();
                        temp.id=i;
                        temp.data=ResultObject.VehicleList[i];
                        displayList.push(temp);
                    }
                    
                }
                component.set('v.displayItems', displayList);
                
                
                var PriceList=[];
                
                var tempListMap=[];
                for(var i=0;i<ResultObject.VehicleList.length;i++){  
                    if(i<12){ 
                        var tempid=ResultObject.VehicleList[i].Id+'_Com';
                        var imageHTML='<div  id='+tempid+' ><img src='+ResultObject.VehicleList[i].Image__c+' alt="Car" style="width:14.8em;height:8em"><br/>'
                        +ResultObject.VehicleList[i].Name+'</div>';
                        var divid=i+1;
                        $('#'+divid+'_div').append(imageHTML);
                        
                    }
                    var temp = new Object();
                    temp.id=i;
                    temp.data=ResultObject.VehicleList[i];
                    tempListMap.push(temp);
                    
                    
                    PriceList.push(ResultObject.VehicleList[i].Price__c);
                }
                //
                component.set('v.VersionListMap', tempListMap);
                
                

                PriceList.sort();
                component.set('v.PriceList', PriceList);
                // CurrentOrder 
                component.set('v.CurrentOrder', 11);
                
                $("#PreviousDiv").prop("readonly", true);
                
            }
            else if (state === "ERROR") {
                alert('Error : ' + JSON.stringify(errors));
            }
        });
        
        $A.enqueueAction(action);
        
        
    },createTable : function(component, CompareList) {
        console.log('Enter'+CompareList);
        
        
        var CompareTableHtml=' <table class="table"><thead><tr><th> &nbsp;</th>';
        for(var i=0;i<CompareList.length;i++){
            CompareTableHtml+='<th><strong>'+CompareList[i].Name+'</strong></th>';
        }
        CompareTableHtml+='</tr> </thead><tbody><tr><td><strong>Vehicle Model</strong></td>';
        
        //Vehicle Model
        for(var i=0;i<CompareList.length;i++){
            CompareTableHtml+='<td>'+CompareList[i].Vehicle_Model__r.Name+'</td>';
        }    
        
        //Price__c
        //
        CompareTableHtml+='</tr> </thead><tbody><tr><td><strong>Price</strong></td>';
        
        //Vehicle Model
        for(var i=0;i<CompareList.length;i++){
            CompareTableHtml+='<td>'+CompareList[i].Price__c+'</td>';
        }    
        
        
        
        //Door Doors__c
        CompareTableHtml+='</tr><tr><td><strong>Doors</strong></td>'
        for(var i=0;i<CompareList.length;i++){
            CompareTableHtml+='<td>'+CompareList[i].Doors__c+'</td>';
        } 
        
        //Engine__c
        CompareTableHtml+='</tr><tr><td><strong>Engine</strong></td>'
        for(var i=0;i<CompareList.length;i++){
            CompareTableHtml+='<td>'+CompareList[i].Engine__c+'</td>';
        } 
        
        //Fuel_Type__c
        CompareTableHtml+='</tr><tr><td><strong>Fuel Type</strong></td>'
        for(var i=0;i<CompareList.length;i++){
            CompareTableHtml+='<td>'+CompareList[i].Fuel_Type__c+'</td>';
        } 
        
        //Displacement_ml__c
        CompareTableHtml+='</tr><tr><td><strong>Displacement (ml)</strong></td>'
        for(var i=0;i<CompareList.length;i++){
            CompareTableHtml+='<td>'+CompareList[i].Displacement_ml__c+'</td>';
        } 
        
        // Max. output, PS (kW) at rpm
        CompareTableHtml+='</tr><tr><td><strong>Max. output, PS (kW) at rpm</strong></td>'
        for(var i=0;i<CompareList.length;i++){
            CompareTableHtml+='<td>'+CompareList[i].Max_output_PS_kW_at_rpm__c+'</td>';
        } 
        
        //
        CompareTableHtml+='</tr><tr><td><strong>Max. torque, Nm at rpm </strong> </td>'
        for(var i=0;i<CompareList.length;i++){
            CompareTableHtml+='<td>'+CompareList[i].Max_torque_Nm_at_rpm__c+'</td>';
        } 
        
        
        //Gearbox Gearbox__c
        CompareTableHtml+='</tr><tr><td><strong>Gearbox </strong></td>'
        for(var i=0;i<CompareList.length;i++){
            CompareTableHtml+='<td>'+CompareList[i].Gearbox__c+'</td>';
        } 
        
        //Wheels Description
        CompareTableHtml+='</tr><tr><td><strong>Wheels Description </strong></td>'
        for(var i=0;i<CompareList.length;i++){
            CompareTableHtml+='<td>'+CompareList[i].Wheels_Description__c+'</td>';
        } 
        
        
        
        //End OF TD
        CompareTableHtml+='</tr></tbody>';
        
        CompareTableHtml+='</table>';
        $('#CompareTable').html(CompareTableHtml);
    }
    
})

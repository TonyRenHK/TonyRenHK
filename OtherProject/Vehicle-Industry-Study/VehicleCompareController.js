({
    doInit : function(component, event, helper) {
        helper.doInit(component, event);
        
        
    },PressPrevious : function(component, event, helper) {
        var CurrentOrder= component.get('v.CurrentOrder');
        
        var ListMap=component.get('v.VersionListMap');
        var cun=0;
        for(var i=0;i<ListMap.length;i++){  
            if(i<CurrentOrder){ 
                console.log(ListMap[i].data.Image__c);
                var tempid=ListMap[i].data.Id+'_Com';
                var imageHTML='<div  id='+tempid+' ><img src='+ListMap[i].data.Image__c+' alt="Car" style="width:14.8em;height:8em"><br/>'
                +ListMap[i].data.Name+'</div>';
                var divid=cun+1;
                $('#'+divid+'_div').html(imageHTML);
                cun++;
                
            }
        }             
        
        
    },PressNext : function(component, event, helper) {
        
        var CurrentOrder= component.get('v.CurrentOrder');
        
        var ListMap=component.get('v.VersionListMap');
        
        var cun=0;
        for(var i=0;i<ListMap.length;i++){  
            if(i>CurrentOrder){ 
                console.log(ListMap[i].data.Image__c);
                var tempid=ListMap[i].data.Id+'_Com';
                var imageHTML='<div  id='+tempid+' ><img src='+ListMap[i].data.Image__c+' alt="Car" style="width:14.8em;height:8em"><br/>'
                +ListMap[i].data.Name+'</div>';
                var divid=cun+1;
                $('#'+divid+'_div').html(imageHTML);
                cun++;
                
            }
        }             
        
         for(var i=0;i<12;i++){  
             if(i>cun){
                var divid=i+1; 
                 //console.log(divid);
                 
             }
             
         }
        $("#9_Alldiv").hide();
        var toggleText = component.find("9_auradiv");
        console.log($("#9_Alldiv"));
		//$A.util.toggleClass(toggleText, "hideDiv");
		$A.util.addClass(toggleText, 'hideDiv');

        
    },rangechange : function(component, event, helper) {
        
        var PriceList=component.get('v.PriceList');
        console.log(PriceList[PriceList.length-1]);
        var maxamount=PriceList[PriceList.length-1];
        console.log($('#RangeDivPart1').val());// RangePart
        console.log($('#RangeDivPart2').val());
        
        var tick1=maxamount*(Number($('#RangeDivPart1').val())/100);
        var tick2=maxamount*(Number($('#RangeDivPart2').val())/100);
        var PriceHtml='Price : '+tick1+' -'+tick2;
        
        $('#PriceDiv').html(PriceHtml);
    },itemsChange : function(component, event, helper) {
        console.log('items range');
        
    },Pressbooking : function(component, event, helper) {
        console.log(event.target.id);
        console.log(component.get("v.counts"));
        //Draw modal
        $('#modalTitle').html('Booking');// modalTitle  modalBody
        $('#modalBody').html('Bokking HTML');
        
        $('#modalbuttonContent').html('Process');
        //$('#modalbutton').attr('onclick','ProcessChoose();');
        $('#ModalPart').modal('show');
        
    },PressOrder : function(component, event, helper) {
        console.log(event.target.id);
        console.log(component.get("v.counts"));
    }
    ,PressFindLocater : function(component, event, helper) {
        console.log(event.target.id);
        console.log(component.get("v.counts"));
    },
    PressCompare : function(component, event, helper) {
        //console.log(event.target.id);//console.log(typeof event.target.id);
        
        if(event.target.id){
            console.log(event.target);
            
            var currentID= event.target.id;
            var className=$("#"+currentID).attr('class'); //console.log(className);
            var VersionListMap=component.get('v.VersionListMap');
            var CompareProductIdList=component.get('v.CompareProductIdList');
            
            var TempString= currentID.split("_");
            
            //console.log(TempString[0]);
            // change button color
            if(className.toLowerCase().indexOf("btn-success")<0 && className.toLowerCase().indexOf("btn-default")>0){
                //Add
                $("#"+currentID).addClass('btn-success');
                $("#"+currentID).removeClass('btn-default');
                
                CompareProductIdList.push(VersionListMap[TempString[0]].data.Id);
            }
            if(className.toLowerCase().indexOf("btn-success")>0 && className.toLowerCase().indexOf("btn-default")<0){
                //Remove
                $("#"+currentID).removeClass('btn-success');
                $("#"+currentID).addClass('btn-default');
                CompareProductIdList.splice(CompareProductIdList.indexOf(VersionListMap[TempString[0]].data.Id),1);
            }
            
            // console.log(CompareProductIdList);
            
            var CompareList=[];
            for(var i=0;i<VersionListMap.length;i++){
                console.log(VersionListMap[i].data.Id);
                if(CompareProductIdList.indexOf(VersionListMap[i].data.Id)>-1){
                    CompareList.push(VersionListMap[i].data);
                }
            }
            
            console.log(CompareList);
            
            //Draw Table again
            if(CompareList.length>0){
                if(CompareList.length<5){
                    helper.createTable(component,CompareList);
                }else{
                    alert('Cannot Add any more!');
                }
                
            }else{
                $('#CompareTable').html('');
            }
            //helper.createTable(component,CompareProductIdList);
            
            //console.log($("#"+currentID).attr('class'));//console.log(component.get("v.counts"));
            
        }else{
            console.log('Cannot get ID');
            console.log(event.target);
            
        }
        
    }
    
})

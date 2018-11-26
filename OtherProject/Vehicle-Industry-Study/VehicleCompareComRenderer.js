({
    // Your renderer method overrides go here
    render : function (component, helper){
        //console.log('render123');
        
        
        var ret = this.superRender();
        return ret;
    },
    rerender  : function (component, helper){
        
        var InitComparePart=' <div class="panel-group"><div class="panel panel-primary"><div class="panel-body"><button type="button" class="btn btn-info" onclick="PressButn();"  >Choose Car</button></div></div></div>';
        
        for (i = 1; i < 5; i++) {
            document.getElementById("ComparePart"+i).innerHTML =InitComparePart;
        }
        
        this.superRerender();
    }
})

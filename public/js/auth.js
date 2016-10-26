var Auth = function(){

 var _thousandFormat = function(value){
     return value;
 };

    return {
        String : function(){
            return {
                thousandFormat : function(value){return _thousandFormat(value);}
            }
        }(),
    }

}();

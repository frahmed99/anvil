$(function(){
    var $taxModalValidation = $("#tax-validation");
    if($taxModalValidation.length){
        $taxModalValidation.validate({
            rules:{
                edit_tax_name:{
                    required: true,
                }
            },
            messages:{
                edit_tax_name:{required: 'Tax Name Is Required'}
            }
        })
    }
})

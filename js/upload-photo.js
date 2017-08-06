//jquery(document).ready(function()
//{
//    jquery('button#imageupload1').click(function(){
//         
//        return false;
////        tb_show('','media-upload.php?post_id=50&type=image&TB_iframe=1');
//    });
//})


(function($){
    $(document).ready(function(){
        $('button#imageupload1').click(function()
        {
            $("body").hide();
            return false;
        });
    });
    
}(jQuery))
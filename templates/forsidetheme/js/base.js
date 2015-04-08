SubscribeNewsLetter = function()
{
    $("#NewsLetterContainer").dialog(
    {
        modal: true,
        width: 300,
        resizable: false,
        position: ['center', 250],
        buttons:
            {
                "Tilmeld" : function()
                {
                    $("#NewsLetterContainer form").submit();
                    return;
                }
            }

     } );
}




DownloadFolders = function()
{
    $("#DownloadContainer").dialog(
    {
        modal: true,
        width: 300,
        resizable: false,
        position: ['center', 250],
     } );
}




PostFaq = function()
{
    $("#FAQForm").dialog(
    {
        modal: true,
        width: 300,
        resizable: false,
        position: ['center', 250],
        buttons:
            {
                "Send" : function()
                {
                    $("#FAQForm form").submit();
                    return;
                }
            }

     } );
}


//$(document).ready(function()
//{
 //   $(".mooga").fancybox(
 //   {
 //       'padding'                : 10,
 //       'autoScale'              : false,
 //       'transitionIn'           : 'none',
 //       'transitionOut'          : 'none',
 //       'hideOnContentClick' 	 : false,
 //       'width'                  : 725,
 //       'height'                 : 408,
 //       'type'                   : 'swf',
//	'swf'			 : {'allowfullscreen' : 'true'}
//    });
//});
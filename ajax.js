$(document).ready(function(){
    // AJAX CALL
    $.ajax({
        method: 'POST',
        url: 'cd_catalog.xml',
        dataType: 'xml',
        success: function(data){
            $(data).find("CD").each(function(){

            var sTitle = $(this).find("TITLE").text();
            var sArtist = $(this).find("ARTIST").text();
            var sYear = $(this).find("YEAR").text();
            var sCountry = $(this).find("COUNTRY").html();
            var sCompany = $(this).find("COMPANY").text();
            var sPrice = $(this).find("PRICE").text();

            $("<tr><td>" + sTitle + "</td>" + "<td>" + sArtist + "</td>" + "<td>" + sYear + "</td> <td>" + sCountry + "</td> <td>" + sCompany + "</td> <td>" + sPrice + "</td></tr>").appendTo('#result');
            });
        },
        error: function() {
            alert("An error occurred while processing XML file.");
        }
    });
});

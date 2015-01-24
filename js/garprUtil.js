function QueryRankingByRegion(region) {

  $.getJSON("https://api.garpr.com/" + region + "/rankings", function( data ) {
    var rankings = data['ranking'];
    for (var i = 0; i < rankings.length; i++) {
      var name = rankings[i]['name'];
      var rank = rankings[i]['rank'];
      var hash = rankings[i]['id'];
        $('#'+region+' tr:last').after('<tr><td class="rank">' + rank + '</td><td class="name"><a href="http://www.garpr.com/#/' + region + '/players/' + hash + '">' + name + '</a></td></tr>');
        //console.log(rankings[i]);
    }  

  });
}

$(document).ready(function(){
  QueryRankingByRegion("norcal");
  QueryRankingByRegion("austin"); 
  QueryRankingByRegion("nyc");
  QueryRankingByRegion("newengland");
  QueryRankingByRegion("newjersey");
});
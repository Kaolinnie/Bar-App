class receipt {
    
}

var order = new receipt();

function previousPage() {
  var currentPageIndex = $(".active").data("index");
  if(currentPageIndex==1) return;
  $(".active").removeClass("active");
  $("[data-index="+(currentPageIndex-1)+"]").addClass("active");
}
function nextPage() {
  var currentPageIndex = $(".active").data("index");
  if(currentPageIndex==3) return;
  $(".active").removeClass("active");
  $("[data-index="+(currentPageIndex+1)+"]").addClass("active");
}
function displayTab(index){
  $(".contentTabs").children('div').removeClass("activeTab");
  $(".tab" + index).addClass("activeTab");
}












//instead of submit client name, this will be submit everything

function submitClientName() {
    //submit lane number
    order.laneName = $("#laneName").val();
    $.ajax({
        url: "/Items/receiptWriter",
        type: "POST",
        data: {"laneName": order.laneName},
        success: function(data){
            console.log(data);
            console.log("success");
        }
    });
}

function increaseTens() {
    var num = parseInt($(".tensSpan").text());
    var onesNum = parseInt($(".onesSpan").text());
    if (num == 6) return;
    if (num==5&&onesNum>6) return;
    $(".tensSpan").text(num + 1);
  }
  
  function decreaseTens() {
    var num = parseInt($(".tensSpan").text());
    if (num == 0) return;
    $(".tensSpan").text(num - 1);
  }
  
  function increaseOnes() {
    var num = parseInt($(".onesSpan").text());
    var tensNum = parseInt($(".tensSpan").text());
    if (num == 9) {
      increaseTens();
      $(".onesSpan").text("0");
      return;
    }
    if (tensNum == 6 && num == 6) return;
    $(".onesSpan").text(num + 1);
  }
  
  function decreaseOnes() {
    var num = parseInt($(".onesSpan").text());
    var tensNum = parseInt($(".tensSpan").text());
    
    if (num == 0) {
      if(tensNum==0) return;
      decreaseTens();
      $(".onesSpan").text("9");
      return;
    }
    $(".onesSpan").text(num - 1);
  }
  
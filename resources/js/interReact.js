
//init the modal
$('.modal-trigger').leanModal();

function openModal1() {
  //simulate ajax call to get the modal content
  var htmlFromServer = getHtml();

  //append the html to the modal
  $('#modal_content').html(htmlFromServer);
  //init the tabs
  $('ul.tabs').tabs();
  //open the modal
  $('#modal1').openModal();
};

function getHtml() {
  return '<img src="https://i.loli.net/2019/05/10/5cd538ad78caa.png">' +
  '<h3 class="center-align">请扫描上方二维码关注我们</h3>';
};
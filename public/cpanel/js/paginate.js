$('#pagination-demo').twbsPagination({
  totalPages: 2,
  visiblePages: 2,
  onPageClick: function(event, page) {
    $('#page-content').text('Page ' + page);
  }
});

$('.sync-pagination').twbsPagination({
  totalPages: 5,
  visiblePages: 2,
  onPageClick: function(evt, page) {
    $('#content').text('Page ' + page);
  }
});

/* 
 * The following content was designed & implemented under AlexSeif.com
 */
$(function () {
  var $cell = $('.ic');

  $cell.find('.image--basic').click(function () {
    var $thisCell = $(this).closest('.ic');

    if ($thisCell.hasClass('is-collapsed')) {
      $cell.not($thisCell).removeClass('is-expanded').addClass('is-collapsed');
      $thisCell.removeClass('is-collapsed').addClass('is-expanded');
    } else {
      $thisCell.removeClass('is-expanded').addClass('is-collapsed');
    }
  });

  $cell.find('.expand__close').click(function () {

    var $thisCell = $(this).closest('.ic');

    $thisCell.removeClass('is-expanded').addClass('is-collapsed');
  });
});

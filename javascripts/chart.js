 $(function () {
     $(".grid").sortable({
         tolerance: 'pointer',
         revert: 'invalid',
         placeholder: 'span2 well placeholder tile',
         forceHelperSize: true
     });
 });
 /* hide child onclick  */
 $(".tree-parent").click(function () {
     $("#child-content").slideToggle(500);
     $("#grandchild-content1").slideUp(500);
     $("#grandchild-content2").slideUp(500);
     $("#grandchild-content3").slideUp(500);
 });

 /* hide grandchild1 onclick  */
 $(".tree-child1").click(function () {
     $("#grandchild-content1").slideToggle(500);
     $("#grandchild-content2").hide();
     $("#grandchild-content3").hide();
 });

 /* hide grandchild2 onclick  */
 $(".tree-child2").click(function () {
     $("#grandchild-content2").slideToggle(500);
     $("#grandchild-content1").hide();
     $("#grandchild-content3").hide();

 });

 /* hide grandchild3 onclick  */
 $(".tree-child3").click(function () {
     $("#grandchild-content2").hide();
     $("#grandchild-content1").hide();
     $("#grandchild-content3").slideToggle(500);

 });
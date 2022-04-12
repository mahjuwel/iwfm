 <?php foreach ($fdownload as $sl) {
             ?>
    <script>
     var a = document.createElement("a");
        a.target = "_blank";
        a.download = "download";
        a.href ="<?php echo base_url() ?>index.php/Admin/firstabstract?absId=<?php echo $sl->email ?>";
        a.click();
</script>
             
<?php } ?>




// <script>
//     var files =[{"email":"mdalhasanj@gmail.com"}];
    
//     for (var i = files.length - 1; i >= 0; i--) {
//         var a = document.createElement("a");
//         a.target = "_blank";
//         a.download = "download";
//         a.href = '<?php echo base_url() ?>index.php/Admin/firstabstract?absId=' + files[i];
//         a.click();
//     };
// </script>
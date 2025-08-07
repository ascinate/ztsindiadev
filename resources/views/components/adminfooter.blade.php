<footer class="footer">





    <div class="container-fluid d-flex justify-content-between">





      <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © {{ date('Y') }}</span>





    </div>





  </footer>





  <!-- partial -->





</div>





<!-- main-panel ends -->





</div>





<!-- page-body-wrapper ends -->





</div>





<!-- container-scroller -->





<!-- plugins:js -->





<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>





<!-- endinject -->





<!-- Plugin js for this page -->





<script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>





<!-- End plugin js for this page -->





<!-- inject:js -->





<script src="{{ asset('assets/js/off-canvas.js') }}"></script>





<script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>





<script src="{{ asset('assets/js/misc.js') }}"></script>





<!-- endinject -->





<!-- Custom js for this page -->





<script src="{{ asset('assets/js/chart.js') }}"></script>





<!-- End custom js for this page -->























<script>





    tinymce.init({





    selector: 'textarea#example',





    height: 500,





    plugins: [





        'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',





        'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',





        'insertdatetime', 'media', 'table', 'help', 'wordcount'





    ],





    toolbar: 'undo redo | blocks | ' +





    'bold italic backcolor | alignleft aligncenter ' +





    'alignright alignjustify | bullist numlist outdent indent | ' +





    'removeformat | help',





    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'





    });





</script>











<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>





<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>





<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>





<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>





<script src="{{ asset('assets/js/dataTables.buttons.min.js') }}"></script>





 <script>





    $(document).ready(function(){





        $('#example').dataTable({





            pageLength: 100,





            searching: true





        });




















        $('#itemlist').dataTable({





            pageLength: 100,





            autoWidth: false,





            searching: true





        });











        $('#auctionlist').dataTable({





            pageLength: 50,





            autoWidth: false,





            searching: true





        });











        $('#exampleyu').dataTable({





            responsive: true





        });





    });


    

















    </script>











<script>





    $(document).ready(function(){





        $("#limitation").change(function(){





            var lim = $("#limitation").val();











            if(lim=='Other')





            {





                $("#xother").show();





            }





            else





            {





                $("#xother").hide();





            }





        });





    });











    $(document).ready(function(){





        new DataTable('#example', {





        





            responsive: true,





            "info":     false,





            





        });





  





    });





    $(function() {





        $("#curr").on("change",function() {





            var curr   = this.value;





            var prefix = curr=="usd"; // or ["usd","yen",...].indexOf(curr); for more





            var sign   = curr=="usd"?"":"";





            $(".price").each(function(){





            $(this).text(





                (prefix?sign:"")   +





                $(this).data(curr) +





                (prefix?"":sign)





            );  





            })





        }).change();





    });











</script>





<script>


 $(document).ready(function(){   


$('#example2').DataTable({


       


      "lengthChange": true, 


      "pageLength":10, 


      "responsive": true,


 }); 


});


</script>























<script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>





<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>





<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.js"></script>

















</body>





</html>







    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('dashboardAssets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('dashboardAssets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('dashboardAssets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('dashboardAssets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('dashboardAssets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('dashboardAssets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('dashboardAssets/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('dashboardAssets/demo.js')}}"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
  <script type="text/javascript">
            // new DataTable("#example");
            $(document).ready(function() {
        $('#example').DataTable({
            "order": [[3, 'desc']] // Sort by the first column in ascending order
        });
    });
  </script>
<script>
function myFunction(event) {
  var modal = document.getElementById("myModal");
  modal.style.display = "block";
  document.getElementById("expandedImg").setAttribute('src', event.target.getAttribute("src"));

}

function closeModal(event) {
  const modal = document.getElementById("myModal");
  modal.style.display = "none";
}
</script>

</body>
</html>

<footer class="footer">

    <div class="container">
        <p>&copy; My Website 2020</p>
    </div>

</footer>

<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" id="loginAlert"></div>
      <form>
        <input type="hidden" id="loginActive" name="loginActive" value="1">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email Address">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="#" id="toggleLogin">Sign Up</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="loginSignupButton" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>

    <script>
    
        $("#toggleLogin").click(function() {
            if ($("#loginActive").val() == "1") {
                $("#loginActive").val("0");
                $("#loginModalTitle").html("Sign Up");
                $("#loginSignupButton").html("Sign Up");
                $("#toggleLogin").html("Login");
            } else {
                $("#loginActive").val("1");
                $("#loginModalTitle").html("Login");
                $("#loginSignupButton").html("Login");
                $("#toggleLogin").html("Sign Up");
            }
        });

        $("#loginSignupButton").click(function() {
            $.ajax({
                type: "POST",
                url: "actions.php?action=loginSignup",
                data: "email=" + $("#email").val() + "&password=" + $("#password").val() + "&loginActive=" + $("#loginActive").val(),
                success: function(result) {
                    if (result == "1") {
                      window.location.assign("http://jamies-shoutout-com.stackstaging.com/");
                    } else {
                      $("#loginAlert").html(result).show();
                    }
                }
            });
        });

        $(".toggleFollow").click(function() {
          var id = $(this).attr("data-userId");
          $.ajax({
                type: "POST",
                url: "actions.php?action=toggleFollow",
                data: "userId=" + id,
                success: function(result) {
                    if (result == "1") {
                      $("a[data-userId='" + id + "']").html("Follow");
                    } else if (result == "2") {
                      $("a[data-userId='" + id + "']").html("Unfollow");
                    }
                }
            });
        });

        $("#postShoutButton").click(function() {
          $.ajax({
                type: "POST",
                url: "actions.php?action=postShout",
                data: "shoutContent=" + $("#shoutContent").val(),
                success: function(result) {
                    if (result == "1") {
                      $("#shoutSuccess").show();
                      $("#shoutFail").hide();
                    } else if (result != "") {
                      $("#shoutFail").html(result).show();
                      $("#shoutSuccess").hide();
                    }
                }
            });
        });
    
    </script>

  </body>
</html>

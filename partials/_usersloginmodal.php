<!-- Modal -->
<div class="modal fade" id="logisticloginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Logistic-Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method='POST' action='partials/_userloginhandel.php'>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="loginusername">Email</label>
                        <input type="email" class="form-control" id="loginemail" name="loginemail" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input type="password" class="form-control" id="loginPassword" name="loginPassword">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="container ml-1">
                <p>
                Not yet a member? <a href=index1.php>Sign up</a>
                </p>
                </div>
            </form>

        </div>
    </div>
</div>


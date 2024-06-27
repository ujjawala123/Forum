<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="signupModalLabel">Signup for an iDiscuss Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form action="/forum/partials/_handleSignup.php" method="post">
            <div class="modal-body">
            <div class="container my-1 col-md-5 ">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHwAAAB8CAMAAACcwCSMAAABOFBMVEUnO3r///8SEUn/f0/qoi//xhvTWTMAAEskOXkADEn/gk9eMErhZjz/yRramTAkNHEcM3bR0tT/VBnRUzSgpr7woyT19fgAADxMO0RHMUYECUn5xByKkrF5gqVjbphIV4s8TYUxRIDT1uDCxtUSLXTg4empr8VZZpMAI2+Tmrbp6/AAHW0AADYaIlsDAEVPT2c+Pl+xsrrWpynKjDXDlS7uqSsAADBpTHLwe1PeXTFAQXdNUHFaXHaXmKmKjKEvMFcdHUpRRXVxS2tbQWy5Z2HBVkKUTVmqUk2/UjaZW2g2G0bUcluHPEGiRjuvSzrgdliRPz2tY2V5e5R0NUGJVmxEIUeVTEopGElpM0TGbF6KMC/uwrfPRiL0rhz7xVL/1nHlq1u0fTjvkirzhif5biBdSUGIXz6Mbzh6/oeeAAAHcUlEQVRogbXb6XbTRhQA4LGTyCObFIUYi4pEXiQ7smLUpikhjuMlgbA3QCBQ2qaUru//Bh0ttiV5lquxfH9wDpyDPs92Z0aaQYXs4baszs6uWW80EWo26ubuTsdquRIPQlndqtnUbNvWNEwCIf9PLfiHplnN+guy4O2O2SQKIWmByU9omp32KvB2dc92WPD8Bzj2XhXsA3HLdJhFXqgAx7Tyw2tVvK9B4Glo+7haywV3u7YNKnOi/LbdFfc+EV7rIjurHIaNuqLSC3Cr4WQu9az0TkPQ9lzcNeXpkDe5dc/Dq9m6GS20/aoU7tadZWk/nDq78EzcwksXOwwNM1uehXezDy9WYLubDTfzs33dzIDX6pJjmxV2nTrkaXhby6m556FptNmGgrdQ7jbRUQuCr8Sm6wt4ezW2ry/UfBqv5d/eM11L97o0Xl+ZTfQ6HzdzHmPJSI/3JN5dqU30Lhu38sxrtMC2xcJdvGLbX+a7DHyVnW0aiU4Xw6vQ+RuHmxW5cKo03N2HyTY6e3T++Ew6F+27FNyEPA1rj58cr5VvKcrF0xO50mvmIm5BKh2fPCmX19bWCK70ladyumOl8VoD8CTt7NinQ5zwz6Rw3Kil8C6g4PgspKe40r+QKrvTTeIugjzmeC2Jk7LLdDuM3AQOyavak3IaV/oVmbJPs2yI1wA2PpnZc1x5bkjgyK7F8CoEf0HDlZcPZPBqDIckLPxqjYL3XxsSOsZz3IIkN3xMw5WfjKKEvm/NcFByQ2UqfukVJfQwzfl4G5TcWLhRlNGddoRDuhuKjfJ0tc91rJEADb6gy/n4HqjW8Rsq/jbAfR3b+2hvd9dsOIAFkbYX4m3Y4kl7Rxtq/YpaDHXbCV7AbZEAvMfBdjvAO7BFxDyzx/HtUmirvaswcWwFsSMskNMJcFhfJ830ajG9Ku/DWlf1g2iyCPGtjmiy8Ps7KrhNYHqOFX2GX0SV3gvt9sHoamSFuqDj4aZL8BZ4ra59SE2pyvbLENevgqnxVO/pJE4DfihoTbtFcOBAC/Rpeo8WE8p1VOm9IE8eeWE1ePrQ1wf8opPBhsBNHuiPwqVMgPcvi1GlBw3e0qO/Ba1A8AOP/yyT4NAmDwI/+HhcLpdv9fvKZcWIKLXoLw5OvZldNMZ+0SfcxIebBeRmXIvYRuX9x2evK9fqrKDewO/lvWIsen7FX+lcXXMRvL9FcVs1PM9QY5I+IvhIj+PeFcFH/AnPbiEr88b0thqXfXxI8IGXwAd+f9e5U45toU4WHGPN1tDJ9fWnolqalT7ob98lcON7v8fp3AnP7qAdeJtj7eT83SuyYfF3LMrF28onTxXibF3bQbtQXEPnn4/LiU3D9mWlaIhwpq7tIuAwx/jDG8rE0n/+s6oKcJaumagOm/uj7LI4n/efX4twho7rCLJHw/bnOJ3ACf9LR4DTddxAgASHz46TdhJXfvtVhFN13BQXe5bQGfj2doB/75Vi4Y1brdaBXioZvLID7PO1hYjht+7e3Pz+5cuXH6I4jOIPEoeHX++VeLqo2vHZoh3HN0lskNiMYj0V95hlJ9Uu6HA4vlFZxLfvBnIs0vhhidXupMMJhlps4SaHf1Ni9Toy1PhJBn+g2ZJ4SidJhpte8Qmt0qXxpE7SK3diiW8U8sATOplYeFMqq+BsfHPjTy4e18mUyltMsArOwjdv1tfv3PmLh8d0spjgLaOow4yD31/38aSexuc6WUZxFpD4EcNm4JsPQ/wOF5/pZAHJWToza52Fr4PwSPeXzpxNg/2GYS+Jh3qwaWBvlzDLZrX5TdTmDwV4oAfbJWaPi2/IYXjY2//m9vaZHmwUmVtkTJlL+fjGxsP1ZKWz8OKDcIvMbHRGXs8HLxZN7msR/KLMihzwXpX/QuikIozrH2Vxvc1/FYbJrkwQJVncG9RELwFvM9prFmn8Zj3V2Vl4sLkUvP4U6Wl8435yWmHiR9PXn7w3IwJ9ARfM59PwTkGvvPm6LB6+OhO/7OfqsrgB/czB08X4IQ0PuhvsAw9HL/0jwO/+S8FVI/6BR/Bpi6f/dz8ZKfwrteCjLB/1eHrpXiK+TcSEZquT5Ec90edMXrsbiUilQNp/6EUFB3/IFeY6eBjj9Idc4Sfs/PTe9NV8ho/3eelhckvhwmMLOelHbQouPrCRi94bFmi4+KhKDro3LtBx8SGdpXXVazNwwPGkZfXZR6hFHHCAYDl9mlepOOBI2jK6PijwcMD5KHndG9f4OOAYoqzu6elTzzIHMOV0byI8gAk6eiqje5OtBUru0G12nWbLHjfOqns68Lgx6KB1Nl0fU0/YSx8xz6LrA/q9DvnD9WBdTeU1MQ64VgDUPe+AZSxzoQKk98bse1RLXSUR697RkAMsd4lGoBu9U+71sSWvD/F0tTdmtjYIF16cYuqqPhkteXGqILwyxtB1fbT8lbGg9NzLchTd6xnDfC7LBcG7JpjSPf3oVNDWGXHuBcm5bng9fTAEXxDN5WpooKuero9Ph21IfUvgBealWEfXi5PBcGuFl2Lnv2DxOnBWN4j/AQdvDDmjjMTOAAAAAElFTkSuQmCC" class="img-rounded" alt="Cinque Terre" width="150" height="150"  >
</div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Useremail</label>
                        <!-- <input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp"> -->
                        <input type="user_email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp"required>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="signupPassword" name="signupPassword"required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" id="signupcPassword" name="signupcPassword"required>
                    </div>
                     
                    <button type="submit" class="btn btn-primary block-center col-md-5" value="send">Signup</button>
            </div>
            
                </form>
    </div>
  </div>
</div>
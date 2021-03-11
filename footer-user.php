<!-- Footer -->
<div class="platform__footer">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    &copy; Copyright 2021 omNom.link
                </div>
                <div class="col-6">
                    <div class="social  social--platform">
                        <a href="#" target="_blank"><i class="fab fa-telegram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-slack"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-bitcoin"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-vk"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Logout modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="logout_modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Выйти из учетной записи?</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <button class="btn  btn-block  btn-outline-dark" type="button" data-dismiss="modal">Нет</button>
                        </div>
                        <div class="col">
                            <button id='exit_btn' class="btn  btn-block  btn-outline-success" type="button" data-dismiss="modal">Да</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- /.platform -->



<!-- JS -->
<script src="/frontend/assets/js/main.min.js"></script>
<!-- AJAX -->
<script>
    $('#exit_btn').click(function (){
        /* LOGOFF */
        $.ajax({
            url: '/ajax/exit.php', 
            type: 'POST',
            cache: false,
            data: {},
            dataType: 'html',
            success: function(data){      
                document.location.href = '/user/auth/';
            }
        });
    });
</script>
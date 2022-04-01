<!-- Main Content -->
<div id="content">

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <div class="nav-item">
    </div>
    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>

    </ul>
</nav>
<!-- Content Wrapper -->
<div class="container-fluid">
    <br>

    <table id="order" class="table table-striped table-bordered" style="width:100%">
        <form method="post" action="<?=BASE_URL;?>/Question/<?=$data['model']?>/<?=$data['id'];?>">
            <tbody>
                <tr>
                    <h1><?=$data['question']['name']?></h1>
                    <td class="text-center">
                        <div class="radio-toolbar">
                            <input type="radio" class="btn-check btn-lg" name="answer" id="success-outlined" value="1" autocomplete="off" checked>
                            <label class="btn btn-outline-success" for="success-outlined">Ya</label>

                            <input type="radio" class="btn-check btn-lg" name="answer" id="danger-outlined" value="0" autocomplete="off">
                            <label class="btn btn-outline-danger" for="danger-outlined">Tidak</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="w-100 p-3">
                            <button type="submit" class="btn btn-success w-100 p-3" name="submit" width="100%">Next</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </form>
    </table>
</div>
</div>
<script type='text/javascript'> 
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
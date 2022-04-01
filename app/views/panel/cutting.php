<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Cutting List</h1>
        <div class="card mb-4">
            <div class="card-body">
                TK => Titik Kritis <br>
                NTK => Non Titik Kritis <br>
                Haram => Tidak dapat digunakan <br>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                    <i class="fa fa-add"></i>Add
                </button>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Notes</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($data['cutting'] as $index=>$cutting):?>
                        <tr>
                            <td><?=$index+1?></td>
                            <td><?=$cutting['name']?></td>
                            <td><?=$cutting['date']?></td>
                            <?php if($cutting['state'] == 'Titik Kritis'):?>
                                <td class="bg-warning text-center"> TK
                            <?php elseif($cutting['state'] == 'Non Titik Kritis'):?>
                                <td class="bg-success text-center"> NTK
                            <?php elseif($cutting['state'] == 'Tidak Dapat'):?>
                                <td class="bg-danger text-center"> Haram
                            <?php else:?>
                                <td class="text-center"> 
                                    <form method="post" action="<?=BASE_URL;?>/Question/cutting/<?=$cutting['id']?>">
                                        <button type="submit" class="btn btn-danger">Identify Status</button>
                                    </form>
                            <?php endif;?>
                            </td>
                            <td><?=$cutting['notes']?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new Cutting</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Tambahkan pemotongan baru?
      </div>
      <div class="modal-footer">
        <form method="post" action="<?=BASE_URL;?>/Panel/add/cutting">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
            <button class="btn btn-primary pull-right" type="submit" name="add">Ya</button>
        </form>
      </div>
    </div>
  </div>
</div>
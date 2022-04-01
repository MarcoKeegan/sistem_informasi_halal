<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Display List</h1>
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
            <div class="card-body text-start">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Menu</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Menu</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Notes</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($data['display'] as $index=>$display):?>
                        <tr>
                            <td><?=$index+1?></td>
                            <td><?=$display['name']?></td>
                            <td><?=$display['menu']?></td>
                            <td><?=$display['date']?></td>
                            <?php if($display['state'] == 'Titik Kritis'):?>
                                <td class="bg-warning text-center"> TK
                            <?php elseif($display['state'] == 'Non Titik Kritis'):?>
                                <td class="bg-success text-center"> NTK
                            <?php elseif($display['state'] == 'Tidak Dapat'):?>
                                <td class="bg-danger text-center"> Haram
                            <?php else:?>
                                <td class="text-center"> 
                                    <form method="post" action="<?=BASE_URL?>/Question/display/<?=$display['id']?>">
                                        <button type="submit" class="btn btn-danger">Identify Status</button>
                                    </form>
                            <?php endif;?>
                            </td>
                            <td><?=$display['notes']?></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Add new Display</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="<?=BASE_URL;?>/Panel/add/display">
      <div class="modal-body">
        Tambahkan pemajangan baru?
        <select name="menu_id" id="menu_id" class="form-select form-select-padding-y-sm">
            <?php foreach($data['menu'] as $menu):?>
                <option value="<?=$menu['id']?>"><?=$menu['name']?></option>
            <?php endforeach;?>
        </select>
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
            <button class="btn btn-primary pull-right" type="submit" name="add">Ya</button>
        </form>
      </div>
    </div>
  </div>
</div>
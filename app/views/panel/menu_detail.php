<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"><?=$data['menu']['name']?></h1>
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
                            <th>Ingredient status</th>
                            <th>Ingredient notes</th>
                            <th>Store status</th>
                            <th>Store notes</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Ingredient status</th>
                            <th>Ingredient notes</th>
                            <th>Store status</th>
                            <th>Store notes</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($data['ingredient'] as $index=>$ingredient):?>
                        <tr>
                            <td><?=$index+1?></td>
                            <td><?=$ingredient['name']?></td>
                            <?php if($ingredient['state'] == 'Titik Kritis'):?>
                                <td class="bg-warning text-center"> TK
                            <?php elseif($ingredient['state'] == 'Non Titik Kritis'):?>
                                <td class="bg-success text-center"> NTK
                            <?php elseif($ingredient['state'] == 'Tidak Dapat'):?>
                                <td class="bg-danger text-center"> Haram
                            <?php endif;?>
                            </td>
                            <td><?=$ingredient['notes']?></td>
                            <?php if($ingredient['state_store'] == 'Titik Kritis'):?>
                                <td class="bg-warning text-center"> TK
                            <?php elseif($ingredient['state_store'] == 'Non Titik Kritis'):?>
                                <td class="bg-success text-center"> NTK
                            <?php elseif($ingredient['state_store'] == 'Tidak Dapat'):?>
                                <td class="bg-danger text-center"> Haram
                            <?php endif;?>
                            </td>
                            <td><?=$ingredient['notes_store']?></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Add new Ingredient</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="<?=BASE_URL;?>/Panel/add/menu_ingredient/<?=$data['menu']['id']?>">
      <div class="modal-body">
        Tambahkan bahan baru pada <?=$data['menu']['name']?>?
        <select name="ingredient_id" id="ingredient_id" class="form-select form-select-padding-y-sm">
            <?php foreach($data['ingredient_list'] as $ingredient):?>
                <option value="<?=$ingredient['id']?>"><?=$ingredient['name']?></option>
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

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Menu List</h1>
        <div class="card mb-4">
            
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
                            <th>Critical ingredients</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Critical ingredients</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($data['menu'] as $index=>$menu):?>
                        <tr>
                            <td><?=$index+1?></td>
                            <td><?=$menu['name']?></td>
                            <td>
                            <?php foreach($menu['ingredient'] as $ingredient):?>
                                - <?=$ingredient['name']?>
                            <?php endforeach;?>
                            </td>
                            <td><a class="btn btn-primary" href="<?=BASE_URL?>/Panel/menu/<?=$menu['id'];?>">Detail</a></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Add new Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="<?=BASE_URL;?>/Panel/add/menu">
      <div class="modal-body">
        Tambahkan menu baru?
        <div class="form-floating mb-3">
            <input class="form-control" id="name" name="name" type="name" placeholder="John Doe"/> 
            <label for="name">Nama menu</label>
        </div>
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
            <button class="btn btn-primary pull-right" type="submit" name="add">Ya</button>
        </form>
      </div>
    </div>
  </div>
</div>

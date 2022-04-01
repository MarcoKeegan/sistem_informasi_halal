<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Assesment List</h1>
        <div class="card mb-4">
            <div class="card-body">
                
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
                            <th>Company</th>
                            <th>Date</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                            <th>8</th>
                            <th>9</th>
                            <th>10</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th>No</th>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Date</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                            <th>8</th>
                            <th>9</th>
                            <th>10</th>
                            <th>Result</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($data['assesment'] as $index=>$assesment):?>
                        <tr>
                            <td><?=$index+1?></td>
                            <td><?=$assesment['name']?></td>
                            <td><?=$assesment['company']?></td>
                            <td><?=$assesment['date']?></td>
                            <td>
                            <?php if(!empty($assesment['A1'])) :?>
                                <?=$assesment['A1']?>
                            <?php else: ?>
                                <form method="post" action="<?=BASE_URL;?>/Question/assesment1/<?=$assesment['id']?>">
                                    <button type="submit" class="btn btn-danger">Asses</button>
                                </form>
                            <?php endif;?>
                            </td>
                            <td>
                            <?php if(!empty($assesment['A2'])) :?>
                                <?=$assesment['A2']?>
                            <?php else: ?>
                                <form method="post" action="<?=BASE_URL;?>/Question/assesment2/<?=$assesment['id']?>">
                                    <button type="submit" class="btn btn-danger">Asses</button>
                                </form>
                            <?php endif;?>
                            </td>
                            <td>
                            <?php if(!empty($assesment['A3'])) :?>
                                <?=$assesment['A3']?>
                            <?php else: ?>
                                <form method="post" action="<?=BASE_URL;?>/Question/assesment3/<?=$assesment['id']?>">
                                    <button type="submit" class="btn btn-danger">Asses</button>
                                </form>
                            <?php endif;?>
                            </td>
                            <td>
                            <?php if(!empty($assesment['A4'])) :?>
                                <?=$assesment['A4']?>
                            <?php else: ?>
                                <form method="post" action="<?=BASE_URL;?>/Question/assesment4/<?=$assesment['id']?>">
                                    <button type="submit" class="btn btn-danger">Asses</button>
                                </form>
                            <?php endif;?>
                            </td>
                            <td>
                            <?php if(!empty($assesment['A5'])) :?>
                                <?=$assesment['A5']?>
                            <?php else: ?>
                                <form method="post" action="<?=BASE_URL;?>/Question/assesment5/<?=$assesment['id']?>">
                                    <button type="submit" class="btn btn-danger">Asses</button>
                                </form>
                            <?php endif;?>
                            </td>
                            <td>
                            <?php if(!empty($assesment['A6'])) :?>
                                <?=$assesment['A6']?>
                            <?php else: ?>
                                <form method="post" action="<?=BASE_URL;?>/Question/assesment6/<?=$assesment['id']?>">
                                    <button type="submit" class="btn btn-danger">Asses</button>
                                </form>
                            <?php endif;?>
                            </td>
                            <td>
                            <?php if(!empty($assesment['A7'])) :?>
                                <?=$assesment['A7']?>
                            <?php else: ?>
                                <form method="post" action="<?=BASE_URL;?>/Question/assesment7/<?=$assesment['id']?>">
                                    <button type="submit" class="btn btn-danger">Asses</button>
                                </form>
                            <?php endif;?>
                            </td>
                            <td>
                            <?php if(!empty($assesment['A8'])) :?>
                                <?=$assesment['A8']?>
                            <?php else: ?>
                                <form method="post" action="<?=BASE_URL;?>/Question/assesment8/<?=$assesment['id']?>">
                                    <button type="submit" class="btn btn-danger">Asses</button>
                                </form>
                            <?php endif;?>
                            </td>
                            <td>
                            <?php if(!empty($assesment['A9'])) :?>
                                <?=$assesment['A9']?>
                            <?php else: ?>
                                <form method="post" action="<?=BASE_URL;?>/Question/assesment9/<?=$assesment['id']?>">
                                    <button type="submit" class="btn btn-danger">Asses</button>
                                </form>
                            <?php endif;?>
                            </td>
                            <td>
                            <?php if(!empty($assesment['A0'])) :?>
                                <?=$assesment['A0']?>
                            <?php else: ?>
                                <form method="post" action="<?=BASE_URL;?>/Question/assesment10/<?=$assesment['id']?>">
                                    <button type="submit" class="btn btn-danger">Asses</button>
                                </form>
                            <?php endif;?>
                            </td>
                            <td><?=$assesment['final_result']?></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Add new Assesment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="<?=BASE_URL;?>/Panel/add/assesment">
      <div class="modal-body">
        Tambahkan penilaian baru?
        <div class="form-floating mb-3">
            <input class="form-control" id="company" name="company" type="name" placeholder="John Doe"/> 
            <label for="company">Nama perusahaan</label>
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

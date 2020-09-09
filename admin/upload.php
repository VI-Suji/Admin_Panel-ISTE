<?php
    use Phppot\DataSource;
    use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
    
    require_once 'DataSource.php';
    $db = new DataSource();
    $conn = $db->getConnection();
    require_once ('./vendor/autoload.php');
    
    if (isset($_POST["import"])) {
    
        $allowedFileType = [
            'application/vnd.ms-excel',
            'text/xls',
            'text/xlsx',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        ];
    
        if (in_array($_FILES["file"]["type"], $allowedFileType)) {
    
            $targetPath = 'uploads/' . $_FILES['file']['name'];
            move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
    
            $Reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    
            $spreadSheet = $Reader->load($targetPath);
            $excelSheet = $spreadSheet->getActiveSheet();
            $spreadSheetAry = $excelSheet->toArray();
            $sheetCount = count($spreadSheetAry);
    
            for ($i = 0; $i <= $sheetCount; $i ++) {
                $name = "";
                if (isset($spreadSheetAry[$i][0])) {
                    $name = mysqli_real_escape_string($conn, $spreadSheetAry[$i][0]);
                }
                $description = "";
                if (isset($spreadSheetAry[$i][1])) {
                    $description = mysqli_real_escape_string($conn, $spreadSheetAry[$i][1]);
                }
    
                if (! empty($name) || ! empty($description)) {
                    $query = "insert into tbl_info(name,description) values(?,?)";
                    $paramType = "ss";
                    $paramArray = array(
                        $name,
                        $description
                    );
                    $insertId = $db->insert($query, $paramType, $paramArray);
                    // $query = "insert into tbl_info(name,description) values('" . $name . "','" . $description . "')";
                    // $result = mysqli_query($conn, $query);
    
                    if (! empty($insertId)) {
                        $type = "success";
                        $message = "Excel Data Imported into the Database";
                    } else {
                        $type = "error";
                        $message = "Problem in Importing Excel Data";
                    }
                }
            }
        } else {
            $type = "error";
            $message = "Invalid File Type. Upload Excel File.";
        }
    }
?>
    <div class="outer-container">
        <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label>Choose Excel
                    File</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
                <button type="submit" id="submit" name="import"
                    class="btn-submit">Import</button>
        
            </div>
        
        </form>
        
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?>
</div>
<?php
$sqlSelect = "SELECT * FROM tbl_info";
$result = $db->select($sqlSelect);
if (! empty($result)) {
?>

<table class='tutorial-table'>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>

        </tr>
    </thead>
    <?php
    foreach ($result as $row) {
?>
    <tbody>
        <tr>
            <td><?php  echo $row['name']; ?></td>
            <td><?php  echo $row['description']; ?></td>
        </tr>
        <?php
    }
?>
    </tbody>
</table>
<?php 
} 
?>
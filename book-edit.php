<?php

require './libs/book.php';

//take information user wanna edit
$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
if ($id){
    $data = get_book_id($id);
}

// if not data -> not book need edit
if (!$data){
    header("location: book-list.php");
}

//if user submit form
if (!empty($_POST['edit_book']))
{
    // take data
    $data['b_name']        = isset($_POST['name']) ? $_POST['name'] : '';
    $data['b_style']         = isset($_POST['style']) ? $_POST['style'] : '';
    $data['b_author']    = isset($_POST['author']) ? $_POST['author'] : '';
    $data['b_id']          = isset($_POST['id']) ? $_POST['id'] : '';

    // Validate information
    $errors = array();
    if (empty($data['b_name'])){
        $errors['b_name'] = 'you dont type book name';
    }

    if (empty($data['b_style'])){
        $errors['b_style'] = 'You dont type book style';
    }
    if (empty($data['b_author'])){
        $errors['b_author']='You dont type author name';
    }

    // Not error -> insert
    if (!$errors){
        edit_book($data['b_id'], $data['b_name'], $data['b_style'], $data['b_author']);
        // return main page
        header("location: book-list.php");
    }
}

disconnect_db();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit book</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1 style="text-align: center;color: cornflowerblue">Edit book you wanna</h1>
<a href="book-list.php">Return</a> <br/> <br/>
<form method="post" action="book-edit.php?id=<?php echo $data['b_id']; ?>">
    <table width="50%" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>Name</td>
            <td>
                <input type="text" name="name" value="<?php echo $data['b_name']; ?>"/>
                <?php if (!empty($errors['b_name'])) echo $errors['b_name']; ?>
            </td>
        </tr>
        <tr>
            <td>Style</td>
            <td>
                <select name="style">
                    <option>Choose Style</option>
                    <option value="Truyện Ngắn"<?php if (!empty($data['b_style']) && $data['b_style'] == 'Truyện Ngắn') echo 'selected'; ?>>Truyện Ngắn</option>
                    <option value="Viễn Tưởng"<?php if (!empty($data['b_style']) && $data['b_style'] == 'Viễn Tưởng') echo 'selected'; ?>>Viễn Tưởng</option>
                    <option value="Ký Sự"<?php if (!empty($data['b_style']) && $data['b_style'] == 'Ký Sự') echo 'selected'; ?>>Ký Sự</option>
                    <option value="Đạo Đức" <?php if (!empty($data['b_style']) && $data['b_style'] == 'Đạo Đức') echo 'selected'; ?>>Đạo Đức</option>
                </select>
                <?php if (!empty($errors['b_style'])) echo $errors['b_style']; ?>
            </td>
        </tr>
        <tr>
            <td>Author</td>
            <td>
                <input type="text" name="author" value="<?php echo !empty($data['b_author']) ? $data['b_author'] : ''; ?>"/>
                <?php if(!empty($errors['b_author'])) echo $errors['b_author'];?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="hidden" name="id" value="<?php echo $data['b_id']; ?>"/>
                <input type="submit" name="edit_book" value="Save"/>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
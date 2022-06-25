<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Professors</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../index.html">University Database</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Professors<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="student.php">Students<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <h1>Welcome Professors!</h1>
    <section class="container-fluid">
        <form action="" method="get">
            <h2>Looking for personal information?</h2>
            <label for="input">Enter SSN:</label>
            <input type="text">
            <br />
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </form>
        <form action="" method="get">
            <h2>Want to browse course grades?</h2>
            <div class="container">
                <label for="input">Enter Course Number:</label>
                <input type="text">
                <label for="input">Enter Section Number:</label>
                <input type="text">
            </div>
            <br />
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </form>
    </section>
<!-- scripts required for bootstrap UI elements -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
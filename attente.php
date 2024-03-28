if(!empty($_GET['search']))
{
    $search = strtolower($_GET['search']);
    $query = $dbh->prepare("SELECT titre, auteur FROM livre WHERE name LIKE '%$search%' ORDER BY name ASC");
    $livres = $query->fetchAll();
}


<form action="/" method="GET" class="d-flex my-4">
            <input class="form-control me-sm-2" type="text" placeholder="Search" name="search" />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                Search
            </button>
        </form>
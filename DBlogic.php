<?php
if(isset($_POST["submit"]))
{
    $university=$_POST["university"];
    $department=$_POST["department"];
    $faculty=$_POST["faculty"];
    $emp_id=$_POST["emp_id"];
    $author=$_POST["author"];
    $coAuthor=$_POST["co-author"];
    $paperTitle=$_POST["papertitle"];
    $journalName=$_POST["journalname"];
    $article=$_POST["article"];
    //$university=$_GET["university"]; region
    $publicationDate=$_POST["publicationdate"];
    $pubYear=$_POST["pubyear"];
    $edition=$_POST["Edition"];
    $pageFrom=$_POST["from"];
    $pageTo=$_POST["to"];
    $impactFactor=$_POST["impact"];
    //$university=$_GET["university"]; listed in scopus
    //$university=$_GET["university"]; listed in
    //$university=$_GET["university"]; lsited in web science
    //$university=$_GET["university"]; peer reviewed
    $issn=$_POST["issn"];
    $isbn=$_POST["isbn"];
    $publisherName=$_POST["publishername"];
    $affiliation=$_POST["affiliation"];
    $correspondAuthor=$_POST["correspondingauthor"];
    $citNumber=$_POST["citnumber"];
    $numOfCit=$_POST["noofcit"];
    $link=$_POST["link"];
    //$university=$_GET["university"];  evidence upload
    $anyInfo=$_POST["anyinfo"];
    $ref=$_POST["ref"];
    $con=mysqli_connect("localhost","root","","form");
    $sql="INSERT INTO `research`(`university`, `department`, `faculty/Scientist`, `employee_id`, `authorName`, `correspondingName`, `paperTitle`, `journalName`, `researchPaper`, `publicationDate`, `publicationYear`, `volume`, `pageFrom`, `pageInt`, `impactFactor`, `issn`, `isbn`, `publisherName`, `instituationalAffiliation`, `correspondingAuthor`, `citationIndex`, `numberOfCitation`, `link`, `anyInformation`, `ref`) VALUES ('".$university."','".$department."','".$faculty."','".$emp_id."','".$author."','".$coAuthor."','".$paperTitle."','".$journalName."','".$article."','".$article."','".$publicationDate."','".$pubYear."','".$edition."','".$pageFrom."','".$pageTo."','".$impactFactor."','".$issn."','".$isbn."','".$publisherName."','".$affiliation."','".$correspondAuthor."','".$citNumber."','".$numOfCit."','".$link."','".$anyInfo."','".$ref."')";
    mysqli_query($con,$sql);
    echo "Data has been inserted successfully\n";
    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }
}
?>
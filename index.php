<?Php
$ArrContextOptions=Array(
    "Ssl"=>Array(
        "Verify_peer"=>False,
        "Verify_peer_name"=>False,
    ),
);  
$LinkAPI = "https://api.codefm.my.id/fakultas/";
$Response = File_get_contents($LinkAPI, False, Stream_context_create($ArrContextOptions));
// Mendecode Prov.Json
$Data = Json_decode($Response, True);
?>
<!DOCTYPE Html>
<Html>
<Head>
    <Title>Faculty</Title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</Head>
<Body>
<H1>Faculty</H1>
<Table Border="1" Style="Width: 100%">
    <Thead>
        <Tr>
            <Th style="text-align: center;">List Faculty</Th>
        </Tr>
    </Thead>
    <Tbody>
        <?Php Foreach ($Data As $Row): ?>
            <Tr>
                <Td><a href="detail.php?id=<?= $Row["id"] ?>"><?= $Row["nama_resmi"] ?> </a></Td>
            </Tr>
        <?Php Endforeach ?>
    </Tbody>
</Table>
</Body>
</Html>
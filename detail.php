<?Php
$ArrContextOptions=Array(
    "Ssl"=>Array(
        "Verify_peer"=>False,
        "Verify_peer_name"=>False,
    ),
);

$id= $_GET['id'];

$LinkAPI = "https://api.codefm.my.id/gedungs/$id";
$Response = File_get_contents($LinkAPI, False, Stream_context_create($ArrContextOptions));
// Mendecode Prov.Json
$Data = Json_decode($Response, True);
?>
<!DOCTYPE Html>
<Html>
<Head>
    <Title>Detail Faculty</Title>
</Head>
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
<Body>
<H1>Detail Faculty</H1>
<Table Border="1" Style="Width: 100%">
    <Thead>
        <Tr>
            <Th style="text-align: center;">Nama Gedung</Th>
            <Th style="text-align: center;">Latitude</Th>
            <Th style="text-align: center;">Longitude</Th>
        </Tr>
    </Thead>
    <Tbody>
        <?Php Foreach ($Data As $Row): ?>
            <Tr>
                <Td><?= $Row["nama_gedung"] ?></Td>
                <Td><?= $Row["lat"] ?></Td>
                <Td><?= $Row["long"] ?></Td>
            </Tr>
        <?Php Endforeach ?>
    </Tbody>
</Table>
</Body>
</Html>
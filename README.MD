kondisi AND 

adalah ketika perbandingan dua/lebih kondisi
satu terpenuhi 
dua terpenuhi
menghasilkan true

selain itu menghasilkan false

contoh kasus
Masuk Bioskop
Andi
kondisi satu : punya uang
kondisi dua : usia 18
Hasilnya true -> boleh masuk

maka boleh masuk
Budi
kondisi satu : punya uang
kondisi dua : usia 15
hasilnya false -> tidak boleh masuk

Tabel kebenaran logika AND
T -> T => T
T -> F => F
F -> T => F
F -> F => F

Tabel kebenaran logika OR
T -> T => T
T -> F => T
F -> T => T
F -> F => F

$sapa = function(string $name)
{
    echo "Hello $name <br>";
};

$sapa('World');
$sapa('PHP');

<?php
class TeacherSeeder extends Seeder {
    public function run() {
        Teacher::create(['name'=>'Lic. Fatima Dolz']);
        Teacher::create(['name'=>'Lic. Jhonny Felípez Andrade (Felipón)']);
        Teacher::create(['name'=>'Lic. Pozo']);
        Teacher::create(['name'=>'Lic. Marcelo Aruquipa']);
        Teacher::create(['name'=>'Lic. Marcelo Aruquipa']);
        Teacher::create(['name'=>'Lic. Bhylenia Rios']);
        Teacher::create(['name'=>'Lic. Edgar Clavijo']);
        Teacher::create(['name'=>'Lic. Veronica Subieta (Lab Fisica I y II cotacota)']);
        Teacher::create(['name'=>'Lic. Isaac Poma']);
        Teacher::create(['name'=>'Lic. Castaños']);
        Teacher::create(['name'=>'Lic. Yuri Miranda']);
        Teacher::create(['name'=>'Lic. Contreras']);
        Teacher::create(['name'=>'Lic Gallardo (Zombi)']);
        Teacher::create(['name'=>'Lic Vargas Inf (HELLBOY)']);
        Teacher::create(['name'=>'Lic. Mullisaca (Tio Mulli)']);
        Teacher::create(['name'=>'Lic Luisa Velásquez']);
        Teacher::create(['name'=>'Lic. Franz Cuevas']);
        Teacher::create(['name'=>'Lic Jose Luis Zeballos (Cebollas Malo)']);
        Teacher::create(['name'=>'Lic Aldo Valdez Alvarado']);
        Teacher::create(['name'=>'Dr. Mario Chavez (El cochinote)']);
        Teacher::create(['name'=>'Dr. Guillermo Choque']);
        Teacher::create(['name'=>'Lic. Carmen Rosa Huanca']);
        Teacher::create(['name'=>'Lic. Miguel Toledo']);
        Teacher::create(['name'=>'Lic. Reynaldo Zeballos (Zeballos bueno)']);
        Teacher::create(['name'=>'Lic. Yohoni Cuenca']);
        Teacher::create(['name'=>'Mg. S. Jorge Terán (Flanders)']);
        Teacher::create(['name'=>'Lic. Brigida Carvajal']);
        Teacher::create(['name'=>'Lic. Ramiro Flores']);
        Teacher::create(['name'=>'Lic. Hermenegildo']);
        Teacher::create(['name'=>'Lic. Virginia']);
        Teacher::create(['name'=>'Ph.D. Villarroel']);
        Teacher::create(['name'=>'Lic. Rosa Flores']);
        Teacher::create(['name'=>'Lic. Jose Maria Tapia']);
        Teacher::create(['name'=>'Lic. Jorge Tancara']);
        Teacher::create(['name'=>'Lic. Lucio Torrico']);
        Teacher::create(['name'=>'Lic. Oscar Bobarin']);
        Teacher::create(['name'=>'Lic. Patricia Trino']);
        Teacher::create(['name'=>'Lic. Andres Burgoa']);
        Teacher::create(['name'=>'Lic. Noemi Poma']);
        Teacher::create(['name'=>'Lic. Evaristo Mamani Carlo']);
        Teacher::create(['name'=>'Lic. Marco Colque']);
        Teacher::create(['name'=>'Lic. Juan Cayoja Cortez']);
        Teacher::create(['name'=>'Lic. René Casilla']);
        Teacher::create(['name'=>'Lic. Llanque Gestión']);
        Teacher::create(['name'=>'Lic. Willy Portugal']);
        Teacher::create(['name'=>'Lic. Menfy Morales']);
        Teacher::create(['name'=>'Lic. Garcia Escalante Elizabeth (Sgto. Garcia)']);
        Teacher::create(['name'=>'Lic. Mariscal (El Fácil)']);
        Teacher::create(['name'=>'Lic. German Huanca (Te hace dormir)']);
        Teacher::create(['name'=>'Lic. Javier Reyes (Flojito)']);
        Teacher::create(['name'=>'Lic. Mirian Mallea']);
        Teacher::create(['name'=>'Lic. Ramiro Ramos']);
        Teacher::create(['name'=>'Lic. Ruben Alcon (El Peor de los Peores)']);
        Teacher::create(['name'=>'Lic. Edgar Ricaldi']);
        Teacher::create(['name'=>'Lic. Emmaa Mancilla']);
        Teacher::create(['name'=>'Lic. Moises Silva']);
        Teacher::create(['name'=>'Lic. Helder Lopez']);
        Teacher::create(['name'=>'Dr. Ramiro La Fuente']);

        Signature::create(['name'=>'inf-111']);
        Signature::create(['name'=>'lab inf-111']);
        Signature::create(['name'=>'inf-112']);
        Signature::create(['name'=>'inf-113']);
        Signature::create(['name'=>'mat-114']);
        Signature::create(['name'=>'mat-115']);
        Signature::create(['name'=>'lin-116']);

        Signature::create(['name'=>'inf-121']);
        Signature::create(['name'=>'lab inf-121']);
        Signature::create(['name'=>'fis-122']);
        Signature::create(['name'=>'lab fis-122']);
        Signature::create(['name'=>'mat-123']);
        Signature::create(['name'=>'mat-124']);
        Signature::create(['name'=>'mat-125']);

        Signature::create(['name'=>'inf-131']);
        Signature::create(['name'=>'lab inf-131']);
        Signature::create(['name'=>'fis-132']);
        Signature::create(['name'=>'lab fis-132']);
        Signature::create(['name'=>'est-133']);
        Signature::create(['name'=>'mat-134']);
        Signature::create(['name'=>'lin-135']);

        Signature::create(['name'=>'inf-141']);
        Signature::create(['name'=>'inf-142']);
        Signature::create(['name'=>'inf-143']);
        Signature::create(['name'=>'inf-144']);
        Signature::create(['name'=>'est-145']);

        Signature::create(['name'=>'inf-151']);
        Signature::create(['name'=>'inf-152']);
        Signature::create(['name'=>'inf-153']);
        Signature::create(['name'=>'inf-154']);
        Signature::create(['name'=>'est-155']);
        Signature::create(['name'=>'mat-156']);

        Signature::create(['name'=>'inf-161']);
        Signature::create(['name'=>'inf-162']);
        Signature::create(['name'=>'inf-163']);
        Signature::create(['name'=>'inf-164']);
        Signature::create(['name'=>'est-165']);
        Signature::create(['name'=>'inf-166']);

        Signature::create(['name'=>'inf-271']);
        Signature::create(['name'=>'inf-272']);
        Signature::create(['name'=>'inf-273']);
        Signature::create(['name'=>'lab inf-273']);

        Signature::create(['name'=>'inf-281']);
        Signature::create(['name'=>'inf-282']);

        Signature::create(['name'=>'inf-391']);
        Signature::create(['name'=>'inf-398 taller 1']);
        Signature::create(['name'=>'inf-399 taller 2']);
    }
}

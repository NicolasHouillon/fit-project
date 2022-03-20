<?php

namespace App\DataFixtures;

use App\Entity\Muscle;
use App\Entity\MuscleGroup;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MusclesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        # biceps
        $biceps = new MuscleGroup();
        $biceps->setName("biceps");
        $manager->persist($biceps);

        $brachial = new Muscle();
        $brachial->setName("brachial");
        $brachial->setMuscleGroup($biceps);
        $manager->persist($brachial);

        $bicepsBrachial = new Muscle();
        $bicepsBrachial->setName("biceps brachial");
        $bicepsBrachial->setMuscleGroup($biceps);
        $manager->persist($bicepsBrachial);

        # triceps
        $triceps = new MuscleGroup();
        $triceps->setName("triceps");
        $manager->persist($triceps);

        $vasteLateral = new Muscle();
        $vasteLateral->setName("vaste interne");
        $vasteLateral->setMuscleGroup($triceps);
        $manager->persist($vasteLateral);

        $vasteMedial = new Muscle();
        $vasteMedial->setName("vaste externe");
        $vasteMedial->setMuscleGroup($triceps);
        $manager->persist($vasteMedial);

        $longChef = new Muscle();
        $longChef->setName("longue portion");
        $longChef->setMuscleGroup($triceps);
        $manager->persist($longChef);

        # deltoïdes
        $deltoides = new MuscleGroup();
        $deltoides->setName("deltoïdes");
        $manager->persist($deltoides);

        $anterieur = new Muscle();
        $anterieur->setName("deltoïde antérieur");
        $anterieur->setMuscleGroup($deltoides);
        $manager->persist($anterieur);

        $lateral = new Muscle();
        $lateral->setName("deltoïde latéral");
        $lateral->setMuscleGroup($deltoides);
        $manager->persist($lateral);

        $posterieur = new Muscle();
        $posterieur->setName("deltoïde postérieur");
        $posterieur->setMuscleGroup($deltoides);
        $manager->persist($posterieur);

        # avant-bras
        $avantBras = new MuscleGroup();
        $avantBras->setName("avant-bras");
        $manager->persist($avantBras);

        $brachioRadial = new Muscle();
        $brachioRadial->setName("brachio radial");
        $brachioRadial->setMuscleGroup($avantBras);
        $manager->persist($brachioRadial);

        $flechisseur = new Muscle();
        $flechisseur->setName("fléchisseur ulnaire du carpe");
        $flechisseur->setMuscleGroup($avantBras);
        $manager->persist($flechisseur);

        $longPalmaire = new Muscle();
        $longPalmaire->setName("long palmaire");
        $longPalmaire->setMuscleGroup($avantBras);
        $manager->persist($longPalmaire);

        # trapèzes
        $trapezes = new MuscleGroup();
        $trapezes->setName("trapèzes");
        $manager->persist($trapezes);

        $superieur = new Muscle();
        $superieur->setName("trapèze supérieur");
        $superieur->setMuscleGroup($trapezes);
        $manager->persist($superieur);

        $median = new Muscle();
        $median->setName("trapèze médian");
        $median->setMuscleGroup($trapezes);
        $manager->persist($median);

        $inferieur = new Muscle();
        $inferieur->setName("trapèze inférieur");
        $inferieur->setMuscleGroup($trapezes);
        $manager->persist($inferieur);

        # pectoraux
        $pectoraux = new MuscleGroup();
        $pectoraux->setName("pectoraux");
        $manager->persist($pectoraux);

        $grand = new Muscle();
        $grand->setName("grand pectoral");
        $grand->setMuscleGroup($pectoraux);
        $manager->persist($grand);

        $petit = new Muscle();
        $petit->setName("petit pectoral");
        $petit->setMuscleGroup($pectoraux);
        $manager->persist($petit);

        # dorsaux
        $dorsaux = new MuscleGroup();
        $dorsaux->setName("dorsaux");
        $manager->persist($dorsaux);

        $grandDorsal = new Muscle();
        $grandDorsal->setName("grand dorsal");
        $grandDorsal->setMuscleGroup($dorsaux);
        $manager->persist($grandDorsal);

        $grandRond = new Muscle();
        $grandRond->setName("grand rond");
        $grandRond->setMuscleGroup($dorsaux);
        $manager->persist($grandRond);

        $rhomboide = new Muscle();
        $rhomboide->setName("rhomboïde");
        $rhomboide->setMuscleGroup($dorsaux);
        $manager->persist($rhomboide);

        $petitRond = new Muscle();
        $petitRond->setName("petit rond");
        $petitRond->setMuscleGroup($dorsaux);
        $manager->persist($petitRond);

        $sousEpineux = new Muscle();
        $sousEpineux->setName("sous-épineux");
        $sousEpineux->setMuscleGroup($dorsaux);
        $manager->persist($sousEpineux);

        $extenseurs = new Muscle();
        $extenseurs->setName("extenseurs de la colonne vertébrale");
        $extenseurs->setMuscleGroup($dorsaux);
        $manager->persist($extenseurs);

        $lombaires = new Muscle();
        $lombaires->setName("lombaires");
        $lombaires->setMuscleGroup($dorsaux);
        $manager->persist($lombaires);

        # abdominaux
        $abdominaux = new MuscleGroup();
        $abdominaux->setName("abdominaux");
        $manager->persist($abdominaux);

        $obliques = new Muscle();
        $obliques->setName("obliques");
        $obliques->setMuscleGroup($abdominaux);
        $manager->persist($obliques);

        $grandDroit = new Muscle();
        $grandDroit->setName("grand droit");
        $grandDroit->setMuscleGroup($abdominaux);
        $manager->persist($grandDroit);

        $transverse = new Muscle();
        $transverse->setName("transverse");
        $transverse->setMuscleGroup($abdominaux);
        $manager->persist($transverse);

        # adducteurs
        $adducteurs = new MuscleGroup();
        $adducteurs->setName("adducteurs");
        $manager->persist($adducteurs);

        $grand = new Muscle();
        $grand->setName("grand adducteur");
        $grand->setMuscleGroup($adducteurs);
        $manager->persist($grand);

        $long = new Muscle();
        $long->setName("long adducteur");
        $long->setMuscleGroup($adducteurs);
        $manager->persist($long);

        $pectine = new Muscle();
        $pectine->setName("pectiné");
        $pectine->setMuscleGroup($adducteurs);
        $manager->persist($pectine);

        $gracile = new Muscle();
        $gracile->setName("gracile");
        $gracile->setMuscleGroup($adducteurs);
        $manager->persist($gracile);

        # abducteurs
        $abducteurs = new MuscleGroup();
        $abducteurs->setName("abducteurs");
        $manager->persist($abducteurs);

        $fasciaLata = new Muscle();
        $fasciaLata->setName("fascia lata");
        $fasciaLata->setMuscleGroup($abducteurs);
        $manager->persist($fasciaLata);

        # fessiers
        $fessiers = new MuscleGroup();
        $fessiers->setName("fessiers");
        $manager->persist($fessiers);

        $grand = new Muscle();
        $grand->setName("grand fessier");
        $grand->setMuscleGroup($fessiers);
        $manager->persist($grand);

        $moyen = new Muscle();
        $moyen->setName("moyen fessier");
        $moyen->setMuscleGroup($fessiers);
        $manager->persist($moyen);

        $petit = new Muscle();
        $petit->setName("petit fessier");
        $petit->setMuscleGroup($fessiers);
        $manager->persist($petit);

        # ischio-jambiers
        $ischios = new MuscleGroup();
        $ischios->setName("ischios-jambiers");
        $manager->persist($ischios);

        $bicepsFemoral = new Muscle();
        $bicepsFemoral->setName("biceps fémoral");
        $bicepsFemoral->setMuscleGroup($ischios);
        $manager->persist($bicepsFemoral);

        $demiTendineux = new Muscle();
        $demiTendineux->setName("demi-tendineux");
        $demiTendineux->setMuscleGroup($ischios);
        $manager->persist($demiTendineux);

        $semiMembraneux = new Muscle();
        $semiMembraneux->setName("semi-membraneux");
        $semiMembraneux->setMuscleGroup($ischios);
        $manager->persist($semiMembraneux);

        # quadriceps
        $quadriceps = new MuscleGroup();
        $quadriceps->setName("quadriceps");
        $manager->persist($quadriceps);

        $droitFemoral = new Muscle();
        $droitFemoral->setName("droit fémoral");
        $droitFemoral->setMuscleGroup($quadriceps);
        $manager->persist($droitFemoral);

        $vasteLateral = new Muscle();
        $vasteLateral->setName("vaste latéral");
        $vasteLateral->setMuscleGroup($quadriceps);
        $manager->persist($vasteLateral);

        $vasteMedial = new Muscle();
        $vasteMedial->setName("vaste médial");
        $vasteMedial->setMuscleGroup($quadriceps);
        $manager->persist($vasteMedial);

        $vasteIntermediaire = new Muscle();
        $vasteIntermediaire->setName("vaste intermédiaire");
        $vasteIntermediaire->setMuscleGroup($quadriceps);
        $manager->persist($vasteIntermediaire);

        # mollets
        $mollets = new MuscleGroup();
        $mollets->setName("mollets");
        $manager->persist($mollets);

        $interne = new Muscle();
        $interne->setName("jumeau interne");
        $interne->setMuscleGroup($mollets);
        $manager->persist($interne);

        $externe = new Muscle();
        $externe->setName("jumeau externe");
        $externe->setMuscleGroup($mollets);
        $manager->persist($externe);

        $soleaire = new Muscle();
        $soleaire->setName("soléaire");
        $soleaire->setMuscleGroup($mollets);
        $manager->persist($soleaire);

        $manager->flush();
    }
}

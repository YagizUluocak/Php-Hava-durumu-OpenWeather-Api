<?php
class sehirler{
    public function sehir()
    {  
        $sehirler = array(
            'Ankara',
            'istanbul',
            'izmir',
            'Adana',
            'Konya',
            'Eskisehir',
            'Bolu',
            'Antalya',
            'Ordu',
            'Mardin',
            'Diyarbakır',
            'Eskişehir',
            'Erzurum',
            'Kars',
            'Ağrı',
            'Muğla',
            'Rize',
            'Trabzon',
            'Hatay',
            'Hakkari'
        ); 
        
        $sayi = count($sehirler);
        for($i=0; $i< $sayi; $i++)
        {
            ?>
                <option  value="<?php echo $sehirler[$i] ?>"><?php echo $sehirler[$i]?></option>
            <?php
        }
    }
}
?>
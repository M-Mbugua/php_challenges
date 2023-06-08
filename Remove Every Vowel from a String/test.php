<?php
class RemoveVowels extends TestCase
{
    public function test()
    {
        $this->assertEquals("f bm rsgns frm ffc NW, thrby dng  grt srvc t th cntry— wll gv hm fr lftm glf t ny n f my crss!", removeVowels("If Obama resigns from office NOW, thereby doing a great service to the country—I will give him free lifetime golf at any one of my courses!"));
        $this->assertEquals("Ths lctn s  ttl shm nd  trvsty. W r nt  dmcrcy!", removeVowels("This election is a total sham and a travesty. We are not a democracy!"));
        $this->assertEquals(" hv nvr sn  thn prsn drnkng Dt Ck.", removeVowels("I have never seen a thin person drinking Diet Coke."));
        $this->assertEquals("vrybdy wnts m t tlk bt Rbrt Pttnsn nd nt Brn Wllms— gss ppl jst dn’t cr bt Brn!", removeVowels("Everybody wants me to talk about Robert Pattinson and not Brian Williams—I guess people just don’t care about Brian!"));
        $this->assertEquals("Kty, wht th hll wr y thnkng whn y mrrd lsr Rssll Brnd. Thr s  gy wh hs gt nthng gng,  wst!", removeVowels("Katy, what the hell were you thinking when you married loser Russell Brand. There is a guy who has got nothing going, a waste!"));
        $this->assertEquals("Wndmlls r th grtst thrt n th S t bth bld nd gldn gls. Md clms fctnl ‘glbl wrmng’ s wrs.", removeVowels("Windmills are the greatest threat in the US to both bald and golden eagles. Media claims fictional ‘global warming’ is worse."));
        $this->assertEquals("Srry lsrs nd htrs, bt my .Q. s n f th hghst -nd y ll knw t! Pls dn’t fl s stpd r nscr,t’s nt yr flt", removeVowels("Sorry losers and haters, but my I.Q. is one of the highest -and you all know it! Please don’t feel so stupid or insecure,it’s not your fault"));
        $this->assertEquals("Hppy Thnksgvng t ll--vn th htrs nd lsrs!", removeVowels("Happy Thanksgiving to all--even the haters and losers!"));
        $this->assertEquals("Wtch Ksch sqrm --- f h s nt trthfl n hs ngtv ds  wll s hm jst fr fn!", removeVowels("Watch Kasich squirm --- if he is not truthful in his negative ads I will sue him just for fun!"));
        $this->assertEquals("bm s, wtht qstn, th WRST VR prsdnt.  prdct h wll nw d smthng rlly bd nd ttlly stpd t shw mnhd!", removeVowels("Obama is, without question, the WORST EVER president. I predict he will now do something really bad and totally stupid to show manhood!"));
    }
}
?>
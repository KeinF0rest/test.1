//円周率＝3.14
//円の面積を計算する関数
//円の面積 ＝ 半径 * 半期 * 3.14
function clacToi1(hannkei) {
    return hannkei * hannkei * 3.14;
}
//半径5cm
document.write( clacToi1(5) + "㎠" + "<br>" );
//半径7cm
document.write( clacToi1(7) + "㎠" + "<br>" );
//半径10cm
document.write( clacToi1(10) + "㎠" + "<br>" );


//大人の料金＝500（円）
//子どもの料金＝200（円）
//合計金額を計算する関数
//合計金額 ＝ 大人の料金 * 大人の人数 + 子どもの料金 * 子どもの人数
function clacToi2(adult, child) {
    return 500 * adult + 200 * child + "円です。";
}
//大人2人、子ども4人
document.write( "A" + clacToi2(2, 4) + "<br>" );
//大人1人、子ども5人
document.write( "B" + clacToi2(1, 5) + "<br>" );
//大人3人、子ども7人
document.write( "C" + clacToi2(3, 7) + "<br>" );
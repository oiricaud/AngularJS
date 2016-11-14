new Morris.Bar({
    element: 'bargraph',
    data: [
        { y: '2002', a: 195, b: 190 },
        { y: '2003', a: 179,  b: 175 },
        { y: '2004', a: 178,  b: 173 },
        { y: '2006', a: 175,  b: 170 },
        { y: '2007', a: 175,  b: 165 },
        { y: '2008', a: 167,  b: 162 },
        { y: '2009', a: 172, b: 168 },
        { y: '2010', a: 167, b: 166 },
        { y: '2011', a: 179, b: 175 },
        { y: '2012', a: 173, b: 170}
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Water per Customer Retail', 'Water per Customer']
});
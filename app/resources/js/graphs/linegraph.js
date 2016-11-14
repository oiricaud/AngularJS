new Morris.Line({
    // ID of the element in which to draw the chart.
    element: 'linegraph',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: [

        { year: '2002', value: 162810 },
        { year: '2003', value: 167753 },
        { year: '2004', value: 171607 },
        { year: '2006', value: 174922 },
        { year: '2007', value: 178031 },
        { year: '2008', value: 182315 },
        { year: '2009', value: 185062 },
        { year: '2010', value: 188927 },
        { year: '2011', value: 191625 },
        { year: '2012', value: 194274 }
    ],
    // The name of the data record attribute that contains x-values.
    xkey: 'year',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['value'],
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['$Value']
});

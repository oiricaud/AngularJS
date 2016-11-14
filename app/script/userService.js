
var app = angular.module("UserApp", []);

app.controller('MainCtrl', function($scope) {
    var modelOutputs = {
        "modelOutputs":
            [
                {
                    "varLabel": "Farm Income",
                    "varName": "Ag_Ben_p",
                    "varValue": [
                        { "year": "1", "NM": 52758, "TX": 46008 },
                        { "year": "2", "NM": 52758, "TX": 46008 },
                        { "year": "3", "NM": 52758, "TX": 46008 }
                    ],
                    "varUnit": "$1000 USD",
                    "xkey" : "year",
                    "ykeys" : ["NM", "TX"]
                },
                {
                    "varLabel": "Urban Net Benefits",
                    "varName": "urb_value_af_p",
                    "varValue": [
                        { "year": "1", "NM": 20699, "TX": 163630 },
                        { "year": "2", "NM": 20658, "TX": 163250 },
                        { "year": "3", "NM": 20611, "TX": 162816 }
                    ],
                    "varUnit": "$1000 USD",
                    "xkey" : "year",
                    "ykeys" : ["NM", "TX"]
                }
        ]
    };
    $scope.ocw = modelOutputs;
});
var classes = [
    {
        "name": "App\\Controller\\LibraryController",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "index",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "createLibrary",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "createLibrarycallback",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "showAllLibrary",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "showLibraryById",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "updateLibrary",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "updateLibrarycallback",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "deleteLibrary",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "deleteLibraryCallback",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 9,
        "nbMethods": 9,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 9,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 12,
        "ccn": 4,
        "ccnMethodMax": 2,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Doctrine\\Persistence\\ManagerRegistry",
            "Symfony\\Component\\HttpFoundation\\Request",
            "App\\Entity\\Library",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Repository\\LibraryRepository",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Repository\\LibraryRepository",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Repository\\LibraryRepository",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Repository\\LibraryRepository",
            "Symfony\\Component\\HttpFoundation\\Request",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Repository\\LibraryRepository",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Repository\\LibraryRepository"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 2,
        "length": 200,
        "vocabulary": 43,
        "volume": 1085.25,
        "difficulty": 8.77,
        "effort": 9516.83,
        "level": 0.11,
        "bugs": 0.36,
        "time": 529,
        "intelligentContent": 123.76,
        "number_operators": 29,
        "number_operands": 171,
        "number_operators_unique": 4,
        "number_operands_unique": 39,
        "cloc": 9,
        "loc": 105,
        "lloc": 96,
        "mi": 56.87,
        "mIwoC": 34.97,
        "commentWeight": 21.91,
        "kanDefect": 0.52,
        "relativeStructuralComplexity": 400,
        "relativeDataComplexity": 0.5,
        "relativeSystemComplexity": 400.5,
        "totalStructuralComplexity": 3600,
        "totalDataComplexity": 4.52,
        "totalSystemComplexity": 3604.52,
        "package": "App\\Controller\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 6,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Controller\\ReportControllerTwig",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "myself",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "about",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "report",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "number",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "quote",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 5,
        "nbMethods": 5,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 5,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 5,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\JsonResponse"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 2,
        "length": 56,
        "vocabulary": 33,
        "volume": 282.49,
        "difficulty": 2.2,
        "effort": 621.47,
        "level": 0.45,
        "bugs": 0.09,
        "time": 35,
        "intelligentContent": 128.4,
        "number_operators": 12,
        "number_operands": 44,
        "number_operators_unique": 3,
        "number_operands_unique": 30,
        "cloc": 5,
        "loc": 36,
        "lloc": 31,
        "mi": 77.46,
        "mIwoC": 50.17,
        "commentWeight": 27.29,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 9,
        "relativeDataComplexity": 1.25,
        "relativeSystemComplexity": 10.25,
        "totalStructuralComplexity": 45,
        "totalDataComplexity": 6.25,
        "totalSystemComplexity": 51.25,
        "package": "App\\Controller\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 3,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Controller\\Card\\Hand",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "add",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setValue",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getValue",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getAsString",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 5,
        "nbMethods": 4,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 4,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 1,
        "wmc": 7,
        "ccn": 4,
        "ccnMethodMax": 2,
        "externals": [
            "App\\Controller\\Card\\CardGraphic"
        ],
        "parents": [],
        "implements": [],
        "lcom": 1,
        "length": 42,
        "vocabulary": 9,
        "volume": 133.14,
        "difficulty": 4.43,
        "effort": 589.61,
        "level": 0.23,
        "bugs": 0.04,
        "time": 33,
        "intelligentContent": 30.06,
        "number_operators": 11,
        "number_operands": 31,
        "number_operators_unique": 2,
        "number_operands_unique": 7,
        "cloc": 38,
        "loc": 78,
        "lloc": 40,
        "mi": 93.77,
        "mIwoC": 49.64,
        "commentWeight": 44.13,
        "kanDefect": 0.84,
        "relativeStructuralComplexity": 9,
        "relativeDataComplexity": 0.85,
        "relativeSystemComplexity": 9.85,
        "totalStructuralComplexity": 45,
        "totalDataComplexity": 4.25,
        "totalSystemComplexity": 49.25,
        "package": "App\\Controller\\Card\\",
        "pageRank": 0.05,
        "afferentCoupling": 3,
        "efferentCoupling": 1,
        "instability": 0.25,
        "violations": {}
    },
    {
        "name": "App\\Controller\\Card\\Card",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setValue",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getValue",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getAsString",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 4,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 1,
        "nbMethodsSetters": 1,
        "wmc": 5,
        "ccn": 4,
        "ccnMethodMax": 4,
        "externals": [],
        "parents": [],
        "implements": [],
        "lcom": 1,
        "length": 47,
        "vocabulary": 17,
        "volume": 192.11,
        "difficulty": 7.64,
        "effort": 1467.03,
        "level": 0.13,
        "bugs": 0.06,
        "time": 82,
        "intelligentContent": 25.16,
        "number_operators": 19,
        "number_operands": 28,
        "number_operators_unique": 6,
        "number_operands_unique": 11,
        "cloc": 29,
        "loc": 58,
        "lloc": 29,
        "mi": 96.03,
        "mIwoC": 51.57,
        "commentWeight": 44.46,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 2.25,
        "relativeSystemComplexity": 2.25,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 9,
        "totalSystemComplexity": 9,
        "package": "App\\Controller\\Card\\",
        "pageRank": 0.41,
        "afferentCoupling": 1,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    },
    {
        "name": "App\\Controller\\Card\\HandGame",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "sum",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "propability",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "newCardInPlay",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "bankPlay",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 4,
        "nbMethods": 4,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 4,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 16,
        "ccn": 13,
        "ccnMethodMax": 7,
        "externals": [
            "App\\Controller\\Card\\Hand",
            "App\\Controller\\Card\\CardGraphic"
        ],
        "parents": [
            "App\\Controller\\Card\\Hand"
        ],
        "implements": [],
        "lcom": 1,
        "length": 156,
        "vocabulary": 38,
        "volume": 818.68,
        "difficulty": 34.91,
        "effort": 28579.26,
        "level": 0.03,
        "bugs": 0.27,
        "time": 1588,
        "intelligentContent": 23.45,
        "number_operators": 60,
        "number_operands": 96,
        "number_operators_unique": 16,
        "number_operands_unique": 22,
        "cloc": 32,
        "loc": 96,
        "lloc": 64,
        "mi": 77.45,
        "mIwoC": 38.45,
        "commentWeight": 38.99,
        "kanDefect": 1.12,
        "relativeStructuralComplexity": 16,
        "relativeDataComplexity": 0.85,
        "relativeSystemComplexity": 16.85,
        "totalStructuralComplexity": 64,
        "totalDataComplexity": 3.4,
        "totalSystemComplexity": 67.4,
        "package": "App\\Controller\\Card\\",
        "pageRank": 0.03,
        "afferentCoupling": 1,
        "efferentCoupling": 2,
        "instability": 0.67,
        "violations": {}
    },
    {
        "name": "App\\Controller\\Card\\CardGraphic",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getAsString",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 2,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "App\\Controller\\Card\\Card"
        ],
        "parents": [
            "App\\Controller\\Card\\Card"
        ],
        "implements": [],
        "lcom": 2,
        "length": 63,
        "vocabulary": 60,
        "volume": 372.13,
        "difficulty": 2.11,
        "effort": 784.14,
        "level": 0.47,
        "bugs": 0.12,
        "time": 44,
        "intelligentContent": 176.61,
        "number_operators": 4,
        "number_operands": 59,
        "number_operators_unique": 4,
        "number_operands_unique": 56,
        "cloc": 17,
        "loc": 32,
        "lloc": 15,
        "mi": 101.41,
        "mIwoC": 56.21,
        "commentWeight": 45.2,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 0.5,
        "relativeSystemComplexity": 1.5,
        "totalStructuralComplexity": 2,
        "totalDataComplexity": 1,
        "totalSystemComplexity": 3,
        "package": "App\\Controller\\Card\\",
        "pageRank": 0.22,
        "afferentCoupling": 6,
        "efferentCoupling": 1,
        "instability": 0.14,
        "violations": {}
    },
    {
        "name": "App\\Controller\\Card\\DeckOfCards",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "makeDeck",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDeck",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getString",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 4,
        "nbMethods": 4,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 4,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 7,
        "ccn": 4,
        "ccnMethodMax": 2,
        "externals": [
            "App\\Controller\\Card\\CardGraphic"
        ],
        "parents": [],
        "implements": [],
        "lcom": 1,
        "length": 35,
        "vocabulary": 11,
        "volume": 121.08,
        "difficulty": 6.57,
        "effort": 795.67,
        "level": 0.15,
        "bugs": 0.04,
        "time": 44,
        "intelligentContent": 18.43,
        "number_operators": 12,
        "number_operands": 23,
        "number_operators_unique": 4,
        "number_operands_unique": 7,
        "cloc": 24,
        "loc": 57,
        "lloc": 33,
        "mi": 93.97,
        "mIwoC": 51.75,
        "commentWeight": 42.21,
        "kanDefect": 0.61,
        "relativeStructuralComplexity": 4,
        "relativeDataComplexity": 0.67,
        "relativeSystemComplexity": 4.67,
        "totalStructuralComplexity": 16,
        "totalDataComplexity": 2.67,
        "totalSystemComplexity": 18.67,
        "package": "App\\Controller\\Card\\",
        "pageRank": 0.04,
        "afferentCoupling": 3,
        "efferentCoupling": 1,
        "instability": 0.25,
        "violations": {}
    },
    {
        "name": "App\\Controller\\GameController",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "getDoc",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "initGame",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "initGameCallback",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "playGame",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "newCard",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "playBank",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 6,
        "nbMethods": 6,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 6,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 12,
        "ccn": 7,
        "ccnMethodMax": 4,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Controller\\Card\\DeckOfCards",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Controller\\Card\\HandGame",
            "App\\Controller\\Card\\CardGraphic",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Controller\\Card\\HandGame",
            "App\\Controller\\Card\\CardGraphic"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 2,
        "length": 282,
        "vocabulary": 50,
        "volume": 1591.57,
        "difficulty": 22.19,
        "effort": 35317.64,
        "level": 0.05,
        "bugs": 0.53,
        "time": 1962,
        "intelligentContent": 71.72,
        "number_operators": 49,
        "number_operands": 233,
        "number_operators_unique": 8,
        "number_operands_unique": 42,
        "cloc": 6,
        "loc": 101,
        "lloc": 95,
        "mi": 51.93,
        "mIwoC": 33.5,
        "commentWeight": 18.43,
        "kanDefect": 0.36,
        "relativeStructuralComplexity": 225,
        "relativeDataComplexity": 0.43,
        "relativeSystemComplexity": 225.43,
        "totalStructuralComplexity": 1350,
        "totalDataComplexity": 2.56,
        "totalSystemComplexity": 1352.56,
        "package": "App\\Controller\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 6,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Controller\\ApiController",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "api",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "quote",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "allCards",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "allCardsShuffle",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "drawOne",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "drawHand",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "gameStand",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "showAllLibrary",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "updateLibrary",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 9,
        "nbMethods": 9,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 9,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 12,
        "ccn": 4,
        "ccnMethodMax": 2,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Controller\\Card\\DeckOfCards",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Controller\\Card\\DeckOfCards",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Controller\\Card\\DeckOfCards",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Controller\\Card\\Hand",
            "App\\Controller\\Card\\CardGraphic",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Repository\\LibraryRepository",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Repository\\LibraryRepository"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 8,
        "length": 262,
        "vocabulary": 63,
        "volume": 1566.05,
        "difficulty": 10.68,
        "effort": 16731.98,
        "level": 0.09,
        "bugs": 0.52,
        "time": 930,
        "intelligentContent": 146.58,
        "number_operators": 59,
        "number_operands": 203,
        "number_operators_unique": 6,
        "number_operands_unique": 57,
        "cloc": 9,
        "loc": 123,
        "lloc": 114,
        "mi": 52.57,
        "mIwoC": 32.22,
        "commentWeight": 20.35,
        "kanDefect": 0.45,
        "relativeStructuralComplexity": 400,
        "relativeDataComplexity": 0.47,
        "relativeSystemComplexity": 400.47,
        "totalStructuralComplexity": 3600,
        "totalDataComplexity": 4.24,
        "totalSystemComplexity": 3604.24,
        "package": "App\\Controller\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 8,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Controller\\CardController",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "home",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "allCards",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "allCardsShuffle",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "drawOne",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "drawHand",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 5,
        "nbMethods": 5,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 5,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 8,
        "ccn": 4,
        "ccnMethodMax": 3,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Controller\\Card\\DeckOfCards",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Controller\\Card\\DeckOfCards",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Controller\\Card\\DeckOfCards",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Controller\\Card\\DeckOfCards",
            "App\\Controller\\Card\\Hand",
            "App\\Controller\\Card\\CardGraphic"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 1,
        "length": 158,
        "vocabulary": 33,
        "volume": 797.01,
        "difficulty": 10.89,
        "effort": 8681.76,
        "level": 0.09,
        "bugs": 0.27,
        "time": 482,
        "intelligentContent": 73.17,
        "number_operators": 36,
        "number_operands": 122,
        "number_operators_unique": 5,
        "number_operands_unique": 28,
        "cloc": 5,
        "loc": 75,
        "lloc": 70,
        "mi": 58.37,
        "mIwoC": 38.9,
        "commentWeight": 19.47,
        "kanDefect": 0.29,
        "relativeStructuralComplexity": 100,
        "relativeDataComplexity": 0.53,
        "relativeSystemComplexity": 100.53,
        "totalStructuralComplexity": 500,
        "totalDataComplexity": 2.64,
        "totalSystemComplexity": 502.64,
        "package": "App\\Controller\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 6,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Repository\\LibraryRepository",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "save",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "remove",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 3,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 5,
        "ccn": 3,
        "ccnMethodMax": 2,
        "externals": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository",
            "Doctrine\\Persistence\\ManagerRegistry",
            "App\\Entity\\Library",
            "App\\Entity\\Library"
        ],
        "parents": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository"
        ],
        "implements": [],
        "lcom": 2,
        "length": 16,
        "vocabulary": 5,
        "volume": 37.15,
        "difficulty": 1.75,
        "effort": 65.01,
        "level": 0.57,
        "bugs": 0.01,
        "time": 4,
        "intelligentContent": 21.23,
        "number_operators": 2,
        "number_operands": 14,
        "number_operators_unique": 1,
        "number_operands_unique": 4,
        "cloc": 32,
        "loc": 53,
        "lloc": 22,
        "mi": 105.99,
        "mIwoC": 59.32,
        "commentWeight": 46.67,
        "kanDefect": 0.29,
        "relativeStructuralComplexity": 25,
        "relativeDataComplexity": 0.28,
        "relativeSystemComplexity": 25.28,
        "totalStructuralComplexity": 75,
        "totalDataComplexity": 0.83,
        "totalSystemComplexity": 75.83,
        "package": "App\\Repository\\",
        "pageRank": 0.04,
        "afferentCoupling": 2,
        "efferentCoupling": 3,
        "instability": 0.6,
        "violations": {}
    },
    {
        "name": "App\\Entity\\Library",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "getId",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTitle",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTitle",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getIsbn",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setIsbn",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getName",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setName",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getImg",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setImg",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 9,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 5,
        "nbMethodsSetters": 4,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [],
        "parents": [],
        "implements": [],
        "lcom": 0,
        "length": 38,
        "vocabulary": 8,
        "volume": 114,
        "difficulty": 4.17,
        "effort": 475,
        "level": 0.24,
        "bugs": 0.04,
        "time": 26,
        "intelligentContent": 27.36,
        "number_operators": 13,
        "number_operands": 25,
        "number_operators_unique": 2,
        "number_operands_unique": 6,
        "cloc": 8,
        "loc": 57,
        "lloc": 49,
        "mi": 76.01,
        "mIwoC": 48.59,
        "commentWeight": 27.42,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 9.44,
        "relativeSystemComplexity": 9.44,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 85,
        "totalSystemComplexity": 85,
        "package": "App\\Entity\\",
        "pageRank": 0.06,
        "afferentCoupling": 2,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    },
    {
        "name": "App\\Kernel",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [],
        "nbMethodsIncludingGettersSetters": 0,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [
            "Symfony\\Component\\HttpKernel\\Kernel"
        ],
        "parents": [
            "Symfony\\Component\\HttpKernel\\Kernel"
        ],
        "implements": [],
        "lcom": 0,
        "length": 0,
        "vocabulary": 0,
        "volume": 0,
        "difficulty": 0,
        "effort": 0,
        "level": 0,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 0,
        "number_operators": 0,
        "number_operands": 0,
        "number_operators_unique": 0,
        "number_operands_unique": 0,
        "cloc": 0,
        "loc": 5,
        "lloc": 5,
        "mi": 171,
        "mIwoC": 171,
        "commentWeight": 0,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 0,
        "relativeSystemComplexity": 0,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 0,
        "totalSystemComplexity": 0,
        "package": "App\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 1,
        "instability": 1,
        "violations": {}
    }
]
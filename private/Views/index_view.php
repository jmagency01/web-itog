<div class="row-container">
    <div class="flex-4 map justify padding">
        <!--<iframe id="map" width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=29.77981567382813%2C59.69685622023513%2C30.83175659179688%2C60.13740224199459&amp;layer=mapnik" style="border: 1px solid black"></iframe>
   -->

            <div id="map"width="100%" height ="80%">

    </div>
    <script>

        var map = L.map('map').setView([55.0, 54.4], 2);

        /*

        Добавим слой карты.

         Так как Leaflet не определяет, само визуальное представление карты,

        то для этого можно использовать разные картографичесие сервисы, например GoogleMaps, или

        OSM. Здесь мы будем использовать Mapbox.

        Первый параметр - это  URL template.

        Что это такое, можно почитать вот здесь:http://leafletjs.com/reference.html#url-template

        */

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6IjZjNmRjNzk3ZmE2MTcwOTEwMGY0MzU3YjUzOWFmNWZhIn0.Y8bhBaUMqFiPrDRW9hieoQ', {

            maxZoom: 18,

            id: 'mapbox.streets'

        }).addTo(map);

        /*

        GeoJSON - это формат записи данных о разных географических объектах.

        Объект GeoJSON описывает форму и особенности географического объекта.

        GeoJSON поддерживает разные типы форм: Point, LineString, Polygon,

        MultiPoint, MultiLineString, MultiPolygon, и GeometryCollection.

        Объект типа 'Feature' объединяет в себе сведения о форме географического

        объекта и описание его параметров.

        В leaflet GeoJSON объекты рисуются на отдельном слое. Создадим его и

        добавим на карту.

        */

        var myLayer = L.geoJson().addTo(map);

        /*

        Нарисуем наши данные на карте  в виде точек следующим образом:

для записей,у которых объявлен атрибут "name", в pop-up окне должно выводиться значение атрибута, для записей, у которых в атрибуте "json" есть ссылка на картинку, в pop-up окне должна выводиться эта картинка.

        Также некоторые точки будем отображать в виде обычных маркеров, а для некоторых изменим             изображение.

        Для начала приведем наши данные к объекту типа Feature, собрав нужные и отбросив лишние

        атрибуты.

        */

        var featureArr = [];

        for(var i in data){

            var geojsonFeature = {

                "type": "Feature",

                "geometry": data[i].location,

                "customizeView":Math.floor(Math.random()*2) // случайно 0 или 1

            }

            if(data[i].hasOwnProperty('name'))

                geojsonFeature.popupContent = data[i].name;

            else if(data[i].hasOwnProperty('json') && data[i].json.hasOwnProperty('image_url'))

                geojsonFeature.popupContent = '<a href="'+ data[i].json.image_url+'" > image_link </a>';

            featureArr.push(geojsonFeature);

        }

        /*

        У объекта L есть метод geoJson. Этот метод возвращает объект geojson,

        который уже можно прикрепить на карту.

        Параметры метода geoJson: L.geoJson( <Object> geojson?, <GeoJSON options> options? )

        Первый - сам объект, который будем крепить на карту

        Второй - объект, описывающий опции прикрепления.

        Подробнее здесь: http://leafletjs.com/reference.html#geojson

        Одна из опций - функция onEachFeature , вызываемая для каждого объекта перед

        добавлением его на GeoJSON layer. Используем ее для привязки pop-up окна

        к каждой из точек.

        */

        function onEachFeature(feature, layer) {

            if(feature.hasOwnProperty('popupContent'))

                layer.bindPopup(feature.popupContent);

        }

        /*

        Некоторые точки будем отображать в виде окружностей. Зададим для них стиль.

        Стиль - это тоже объект, в будущем он будет передан в функцию.

        */

        var geojsonMarkerOptions = {

            image: "plus.png",

            opacity: 1,

            fillOpacity: 0.8

        };

        /*

       Определим функцию для визуального отображения. Она является частью набора

        опций и будет вызываться для каждого объекта перед его добавлением.

        Из нее в зависимости от условий будем возвращать разные объекты слоя.

        latlng - широта и долгота, она будет автоматически извлекаться из

        каждого Feature и передаваться.

        */

        function pointToLayer(feature, latlng) {

            if(feature.customizeView)

                return L.marker(latlng,geojsonMarkerOptions);

            else

                return L.circleMarker(latlng, geojsonMarkerOptions);

        }



        /*

        Теперь добавим все точки на GeoJSON layer, указав в опциях наши функции

        */

        L.geoJson(featureArr, {

            onEachFeature: onEachFeature,

            pointToLayer: pointToLayer

        }).addTo(map);



        /*

        Теперь добавим на карту геометрические фигуры. Они отличаются от маркеров тем, что

        их размер привязан не к экрану, а к местности. Поэтому они будут уменьшаться и

        увеличиваться при отдалении и приближении.

        */



        /*

                    L.geoJSON(data, {
                        style: function (feature) {
                            return {color: feature.properties.color};
                        }
                    }).bindPopup(function (layer) {
                        return layer.feature.properties.description;
                    }).addTo(map);*/
        /*	L.marker([59.927235, 30.338141]).addTo(map)
                .bindPopup('Метка!!')
                .openPopup();
            L.marker([59.927236, 30.338143]).addTo(map)
                .bindPopup('Метка!!')
                .openPopup();*/
var data =[

            { "_id" : { "$oid" : "55282f3b5c0dd1178d37f7a6" }, "date" : { "$date" : 1428707691703 }, "location" : { "type" : "Point", "coordinates" : [ 55.0, 54.3 ] }, "json" : { "description" : "Библиотека Даля", "image_url":"plus.png"} },

            { "_id" : { "$oid" : "55282f405c0dd1178d37f7a7" }, "date" : { "$date" : 1428707696350 }, "location" : { "type" : "Point", "coordinates" : [ 11, 2.4 ] }, "name" : "" },

            { "_id" : { "$oid" : "55282f4a5c0dd1178d37f7a8" }, "date" : { "$date" : 1428707706604 }, "location" : { "type" : "Point", "coordinates" : [ 1, 2.4 ] }, "name" : "" },

            { "_id" : { "$oid" : "5528334b5c0dd1178d37f7a9" }, "date" : { "$date" : 1428708731758 }, "location" : { "type" : "Point", "coordinates" : [ 12, 2.4 ] }, "name" : "" },

            { "_id" : { "$oid" : "552833515c0dd1178d37f7aa" }, "date" : { "$date" : 1428708737813 }, "location" : { "type" : "Point", "coordinates" : [ 22, 2.4 ] }, "name" : "" },

            { "_id" : { "$oid" : "552833515c0dd1178d37f7bb" }, "date" : { "$date" : 1428708737814 }, "location" : { "type" : "Point", "coordinates" : [ 24, 4.4 ] }, "name" : "point_GT_1318" },

            { "_id" : { "$oid" : "552833515c0dd1178d37f7cc" }, "date" : { "$date" : 1428708737814 }, "location" : { "type" : "Point", "coordinates" : [ 24, 4.4 ] }, "name" : "point_GT_1319" },

        ]
    </script>
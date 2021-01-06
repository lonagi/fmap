import {MapContainer, Marker, TileLayer, Popup} from "react-leaflet";
import MarkerClusterGroup from "react-leaflet-markercluster";
import React, {Component} from 'react';
import {APITOKEN} from './API';

class Map extends Component {
    constructor(props) {
        super(props);
        this.state = {
            coords: []
        };

        var data = new FormData();
        data.append("token",APITOKEN);

        fetch("https://api.lonagi.pw/fwifi.php" , {
            method: 'POST',
            body: data
        }).then( x => {
            return x.json()
        }).then(y => {
            y.map((t=> (
                this.setState({
                    coords: this.state.coords.concat([t])
                })
            )))
        });
    }

    render() {
        return (
            <div>
                <MapContainer
                    className="markercluster-map"
                    center={[47.0405623,28.8643888]}
                    zoom={15}
                    maxZoom={18}
                >
                    <TileLayer
                        url="https://cartodb-basemaps-{s}.global.ssl.fastly.net/dark_all/{z}/{x}/{y}.png"
                        attribution='&copy; fsociety Vopilov'
                    />
                    <MarkerClusterGroup>
                        <Marker position={[49.8397, 24.0297]} />
                        <Marker position={[52.2297, 21.0122]} />
                        <Marker position={[51.5074, -0.0901]} />
                    </MarkerClusterGroup>;
                </MapContainer>;
            </div>
        );
    }
}

export default Map;

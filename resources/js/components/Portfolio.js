import React from 'react';

export default function PortFolio(){
    return (
        <div className="portfolio-container">
            <div className="PPS-wrapper">
                <div className="work-title">P's Portfolio-Site</div>
                <div className="img-lists">
                    <div className="work-img PPS-img1"></div>
                    <div className="work-img PPS-img3"></div>
                    <div className="work-img PPS-img2"></div>
                    <div className="work-img PPS-img4"></div>
                </div>
                <div className="work-introduction">仮の説明文　ABCDEFGHIJKLMNOPQRSTUVWXYZ あいうえおかきくけこさしすせそたちつてとなにぬねのはひふへほまみむめもやゆよらりるれろわをん</div>
            </div>

            <div className="ORS-wrapper">
                <div className="work-title">ORSystem</div>
                <div className="img-lists">
                    <div className="work-img workImg4"></div>
                    <div className="work-img workImg5"></div>
                </div>
                <div className="work-introduction"></div>
            </div>
        </div>
    );
}

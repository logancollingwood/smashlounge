<?php

$hasFrameData = array('Wave Dash', 'Jump Canceled Grab', 'Ledge Hop', 'L Cancel', 'Ledge Stall');

function makeControllerWithID($id) {
echo '
    <svg 
                id="controller-' . $id . '"
                class="controller"
                data-target="gif' . $id . '" 
                version="1.1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 3836.123 2692.432">
                
                <!-- L Button -->
                <g class="button button-l">
                    <!-- L-Button Outline -->
                    <ellipse class="outline" fill="#C1C1C1" cx="714.061" cy="480.044" rx="394.32" ry="416.559"/>
                    
                    <!-- L-Button -->
                    <ellipse class="core" fill="#999999" cx="714.061" cy="484.045" rx="381.555" ry="410.274"/>
                </g>
                
                <!-- R Button -->
                <g class="button button-r">
                    <!-- R-Button Outline -->
                    <ellipse class="outline" fill="#C1C1C1" cx="3142.063" cy="481.044" rx="394.32" ry="416.559"/>
                    
                    <!-- R-Button -->
                    <ellipse class="core" fill="#999999" cx="3142.063" cy="485.045" rx="381.555" ry="410.274"/>
                </g>
                
                <!-- Z-Button -->
                <g class="button button-z">
                    <!-- Z-Button Outline -->
                    <path class="outline" fill="#7A6793" d="M3573.869,417.199c-9.152-20.295-141.297-109.764-312.959-156.144
                        c-171.664-46.381-446.05-75.91-470.475-66.579c-24.426,9.331-20.68,96.067-20.68,96.067l755.057,236.362
                        C3524.813,526.907,3583.021,437.494,3573.869,417.199z"/>

                    <!-- Z-Button -->
                    <path class="core" fill="#8E79AD" d="M3560.832,427.337c-8.855-19.636-136.709-106.2-302.801-151.075
                        c-166.091-44.875-431.571-73.445-455.205-64.418c-23.633,9.028-20.008,92.95-20.008,92.95l730.55,228.689
                        C3513.369,533.484,3569.688,446.973,3560.832,427.337z"/>
                </g>         

                <!-- Controller Body -->
                <g class="cbody">
                    <!-- Center -->
                    <g class="center">
                        <!-- Outline -->
                        <path class="outline" fill="#9E9E9E" d="M1925.959,4.217c-783.427,0-1504.381,382.763-1504.381,382.763l447.268,1463.6
                            c0,0,200.018-494.059,1044.963-494.059c807.355,0,1061.166,473.807,1061.166,473.807L3398.543,378.98
                            C3398.543,378.98,2709.622,4.217,1925.959,4.217z"/>

                        <!-- Core -->
                        <path class="core" fill="#42b6b6" d="M1926.061,20.044c-767.991,0-1504,388-1504,388l460,1390c0,0,194.991-457.374,1044-457.374
                            c779.869,0,1036,437.374,1036,437.374l436.001-1378C3398.063,400.044,2678.083,20.044,1926.061,20.044z"/>
                    </g>

                    <!-- Left Handle -->
                    <g class="handle handle-left">
                        <!-- Outline -->
                        <path class="outline" fill="#9E9E9E" d="M74.245,825.857c-30.5,123.798-80.063,786.991-61.001,1136.274
                            c19.063,349.283,53.376,702.986,282.128,725.094c228.751,22.107,244.002-265.277,270.688-371.389
                            c26.688-106.111,163.938-711.83,163.938-711.83S104.745,702.062,74.245,825.857z"/>

                        <!-- Core -->
                        <path class="core" fill="#42b6b6" d="M85.928,850.777c-28.94,121.041-75.969,769.477-57.881,1110.985
                            c18.088,341.51,50.646,687.344,267.699,708.957c217.056,21.615,231.525-259.375,256.85-363.123
                            c25.322-103.75,155.556-695.988,155.556-695.988S114.869,729.735,85.928,850.777z"/>
                    </g>
                    
                    <!-- Right Handle -->
                    <g class="handle handle-right">
                        <!-- Outline -->
                        <path class="outline" fill="#9E9E9E" d="M3769.283,829.857c-31.246-123.796-671.802,778.149-671.802,
                            778.149s140.611,605.719,167.953,711.828c27.34,106.111,
                            42.963,393.496,277.313,371.391s269.5-375.811,
                            289.029-725.094C3851.305,1616.85,3800.529,953.655,3769.283,829.857z"/>
                        
                        <!-- Core -->
                        <path class="core" fill="#42b6b6" d="M3757.313,854.777c-29.648-121.042-637.449,760.831-637.449,760.831s133.42,592.238,159.363,695.986
                                        c25.941,103.75,40.768,384.74,263.133,363.125c222.365-21.613,255.721-367.445,274.25-708.957
                                        C3835.141,1624.254,3786.961,975.818,3757.313,854.777z"/>
                    </g>

                    <!-- Left Frame -->
                    <g class="bodyframe bodyframe-left">
                        <!-- Outline -->
                        <path class="outline" fill="#9E9E9E" d="M1747.267,1637.445c-122.758-188.311-176.878-182.527-252.715-305.763
                            c-97.796-158.918,14.472-476.005-199.593-766.219c-174.591-236.698-591.61-384.653-941.213-138.619
                            C-19.332,689.402-2.083,1126.615,178.529,1400.73c189.644,287.821,445.085,264.055,582.853,407.409
                            c85.998,89.488,101.856,265.086,203.892,370.361c143.789,148.355,380.245,225.332,639.149,61.496
                            C1820.139,2103.492,1860.034,1810.43,1747.267,1637.445z"/>

                        <!-- Core -->
                        <path class="core" fill="#42b6b6" d="M1742.061,1656.045c-111.077-187.172-185.557-195.029-260-316c-96-156-1.5-502.604-192-760
                            c-171.759-232.075-571.054-373.108-920-140c-362.301,242.029-364,668-172,956c188.323,282.485,434.635,257.502,568,400
                            c108.42,115.844,111.846,264.143,196,356c154.799,168.969,400.249,242.107,644,68
                            C1830.061,2060.045,1814.569,1778.227,1742.061,1656.045z"/>
                    </g>

                    <!-- Right Frame -->
                    <g class="bodyframe bodyframe-right">
                        <!-- Outline -->
                        <path class="outline" fill="#9E9E9E" d="M3487.375,426.845c-349.602-246.034-766.623-98.079-941.214,138.619
                            c-214.063,290.214-101.795,607.301-199.592,766.219c-75.836,123.235-129.957,117.452-252.715,305.764
                            c-112.766,172.982-72.872,466.045,142.844,602.551c258.905,163.836,495.362,86.859,639.151-61.496
                            c102.034-105.273,117.892-280.873,203.892-370.361c137.769-143.354,393.21-119.588,582.853-407.409
                            C3843.207,1126.615,3860.455,689.403,3487.375,426.845z"/>

                        <!-- Core -->
                        <path class="core" fill="#42b6b6" d="M3471.063,440.044c-348.945-233.108-748.243-92.075-920.001,140c-190.5,257.396-96,604-192,760
                            c-74.444,120.972-148.924,128.828-260,316c-72.508,122.182-88,404,136,564c243.751,174.107,489.201,100.969,644-68
                            c84.154-91.857,87.58-240.156,196-356c133.367-142.498,379.677-117.516,568.001-400
                            C3835.063,1108.044,3833.363,682.074,3471.063,440.044z"/>
                    </g>

                    <!-- Control Stick Base -->
                    <g class="base base-controlstick">
                        <!-- Outline -->
                        <ellipse class="outline" fill="#9F9F9F" cx="762.022" cy="996.026" rx="475.268" ry="470.415"/>

                        <!-- Core -->
                        <ellipse class="core" fill="#42b6b6" cx="762.022" cy="996.025" rx="463.164" ry="458.437"/>
                    </g>

                    <!-- D-Pad Base -->
                    <g class="base base-dpad">
                        <!-- Outline -->
                        <ellipse class="outline" fill="#9E9E9E" cx="1324.519" cy="1860.924" rx="320.406" ry="317.137"/>
                            
                        <!-- Core -->
                        <ellipse class="core" fill="#42b6b6" cx="1324.519" cy="1860.924" rx="312.248" ry="309.061"/>
                    </g>

                    <!-- Buttons Base -->
                    <g class="base base-buttons">
                        <!-- Outline -->
                        <ellipse class="outline" fill="#9F9F9F" cx="3101.49" cy="996.026" rx="475.268" ry="470.415"/>
                        
                        <!-- Core -->
                        <ellipse class="core" fill="#42b6b6" cx="3101.488" cy="996.025" rx="463.166" ry="458.437"/>
                    </g>
                </g>

                <!-- Control Stick -->
                <g class="controlstick">
                    <!-- Frame -->
                    <g class="controlstick-frame">
                        <!-- Outline -->
                        <path class="outline" d="M975.538,795.587c-16.518-16.517-171.985-88.264-210.782-88.264c-38.798,0-189.87,67.706-210.238,88.074
                            c-21.36,21.36-87.389,180.218-88.396,211.243c-0.981,30.302,63.237,186.728,87.046,210.534
                            c26.177,26.178,171.714,85.496,210.512,86.467c38.797,0.971,184.899-64.136,209.767-86.1
                            c25.229-22.284,89.315-181.147,89.315-211.279C1062.76,976.197,993.93,813.982,975.538,795.587z"/>

                        <!-- Core -->
                        <path fill="#D1D1D1" d="M969.094,801.995c-16.014-16.015-166.736-85.57-204.351-85.57s-184.073,65.64-203.821,85.386
                            c-20.709,20.709-84.722,174.719-85.695,204.797c-0.952,29.377,61.307,181.027,84.389,204.108
                            c25.377,25.377,166.473,82.886,204.085,83.827c37.613,0.939,179.257-62.179,203.363-83.472
                            c24.46-21.604,86.591-175.619,86.591-204.83C1053.655,977.09,986.926,819.826,969.094,801.995z"/>
                    </g>
                    
                    <!-- Stick -->
                    <g class="controlstick-stick">
                        <!-- 4th Ring -->
                        <g class="controlstick-ring">
                            <!-- Outline -->
                            <ellipse class="outline" cx="763.709" cy="1008.932" rx="248.436" ry="238.772"/>
                            
                            <!-- Core -->
                            <ellipse class="core" fill="#EEEEEE" cx="763.709" cy="1008.931" rx="234.287" ry="225.174"/>
                        </g>

                        <!-- 3rd Ring-->
                        <g class="controlstick-ring">                
                            <!-- Outline -->
                            <ellipse class="outline" fill="#ACACAC" cx="762.127" cy="1009.895" rx="211.472" ry="199.687"/>
                            
                            <!-- Core -->
                            <ellipse class="core" fill="#EEEEEE" cx="762.127" cy="1009.895" rx="199.429" ry="188.315"/>
                        </g>

                        <!-- 2nd Ring -->
                        <g class="controlstick-ring">                
                            <!-- Outline -->
                            <ellipse class="outline" fill="#ACACAC" cx="761.956" cy="1015.155" rx="135.662" ry="128.104"/>
                            
                            <!-- Core -->
                            <ellipse class="core" fill="#EEEEEE" cx="761.954" cy="1015.156" rx="123.949" ry="117.042"/>
                        </g>

                        <!-- 1st Ring -->                    
                        <g class="controlstick-ring">
                            <!-- Outline -->
                            <ellipse class="outline" fill="#ACACAC" cx="764.107" cy="1015.067" rx="53.976" ry="50.966"/>
                            
                            <!-- Core -->
                            <ellipse class="core" fill="#EEEEEE" cx="764.104" cy="1015.071" rx="42.118" ry="39.771"/>
                        </g>
                    </g>
                </g>

                <!-- C-Stick -->
                <g class="cstick">
                    <!-- Frame -->
                    <g class="cstick-frame">
                        <!-- Outline -->
                        <path class="cstick-frame-outline" d="M2733.538,1644.588c-16.518-16.518-171.985-88.264-210.782-88.264c-38.798,0-189.87,67.705-210.238,88.072
                            c-21.361,21.361-87.389,180.219-88.396,211.244c-0.981,30.303,63.237,186.729,87.045,210.535
                            c26.178,26.176,171.715,85.496,210.512,86.465c38.798,0.973,184.899-64.135,209.767-86.098
                            c25.229-22.285,89.316-181.148,89.316-211.279C2820.76,1825.197,2751.93,1662.982,2733.538,1644.588z"/>

                        <!-- Core -->
                        <path class="cstick-frame-core" fill="#FFE400" d="M2727.094,1650.994c-16.014-16.014-166.736-85.57-204.351-85.57s-184.073,65.641-203.821,85.387
                            c-20.709,20.709-84.722,174.719-85.695,204.797c-0.952,29.377,61.307,181.027,84.389,204.107
                            c25.377,25.377,166.472,82.887,204.085,83.828c37.613,0.938,179.257-62.18,203.363-83.473
                            c24.46-21.604,86.591-175.619,86.591-204.83C2811.655,1826.09,2744.926,1668.826,2727.094,1650.994z"/>
                    </g>
                    
                    <!-- Nub -->
                    <g class="cstick-nub">
                        <!-- Outline -->
                        <circle class="cstick-nub-outline" fill="#5F5500" cx="2522.061" cy="1860.045" r="144"/>

                        <!-- Core -->
                        <circle class="cstick-nub-core" fill="#FFE400" cx="2522.061" cy="1860.045" r="128"/>
                    </g>
                </g>

                <!-- Directional Pad -->
                <g class="dpad">
                    <!-- Directional Pad Outline -->
                    <polygon class="outline" points="1407.606,1785.984 1407.606,1621.135 1243.859,1621.135 1243.946,1783.559 1085.333,1783.559 
                        1085.333,1939.924 1242.822,1941.135 1242.911,2105.984 1405.333,2105.984 1406.545,1938.711 1568.667,1937.5 
                        1568.667,1785.984"/>

                    <!-- Directional Pad -->
                    <polygon class="core" fill="#EAEAEA" points="1398.883,1795.037 1398.883,1631.637 1252.255,1631.637 1252.417,1792.762 1094.116,1792.762 
                        1094.116,1931.572 1252.177,1932.709 1252.34,2095.488 1396.235,2095.488 1397.706,1930.436 1558.214,1929.297 
                        1558.214,1795.037"/>

                    <polygon class="dpad-up" fill="#C7C7C7" points="1325.358,1664.115 1276.711,1746.045 1372.296,1746.045"/>

                    <polygon class="dpad-down" fill="#C7C7C7" points="1276.711,1987.045 1325.358,2068.973 1372.296,1987.045"/>

                    <polygon class="dpad-left" fill="#C7C7C7" points="1122.084,1865.701 1204.014,1914.346 1204.014,1818.762"/>

                    <polygon class="dpad-right" fill="#C7C7C7" points="1445.014,1818.762 1445.014,1914.346 1526.942,1865.701"/>
                    
                    <!-- Directional Pad Center -->
                    <circle class="dpad-center" fill="#C7C7C7" cx="1324.964" cy="1863.462" r="48.647"/>
                </g>

                <!-- Start Button -->
                <g class="button button-start">
                    <!-- Outline -->
                    <circle class="outline" cx="1924.061" cy="1164.044" r="93"/>
                    
                    <!-- Core -->
                    <circle class="core" fill="#EAEAEA" cx="1924.061" cy="1164.044" r="82"/>
                </g>

                <!-- A Button -->
                <g class="button button-a">
                    <!-- A Button Outline -->
                    <circle class="outline" cx="3106.063" cy="988.044" r="240"/>

                    <!-- A Button -->
                    <circle class="core" fill="#6D998B" cx="3106.063" cy="988.044" r="224"/>
                </g>

                <!-- B Button -->
                <g class="button button-b">
                    <!-- B Button Outline -->
                    <circle class="outline" cx="2666.061" cy="1220.044" r="148"/>

                    <!-- B Button -->
                    <circle class="core" fill="#996D6D" cx="2666.061" cy="1220.044" r="130"/>
                </g>
                
                <!-- Y Button -->
                <g class="button button-y">
                    <!-- Y Button Outline -->
                    <path class="outline" d="M2904.061,498.044c-40,18-216,108-140,216c94,100,146-2,226-40c104-40,210.001,18,210.001-118
                        C3192.063,428.044,2944.061,480.044,2904.061,498.044z"/>

                    <!-- Y Button -->
                    <path class="core" fill="#999999" d="M3185.359,556.725c-8.889-112.396-236.648-62.308-273.912-45.484s-207.073,96.897-134.669,194.161
                        c83.202,86.024,136.636-11.179,211.14-46.642C3084.881,621.202,3188.797,674.544,3185.359,556.725z"/>
                </g>

                <!-- X Button -->
                <g class="button button-x">
                    <!-- X Button Outline -->
                    <path class="outline" d="M3608.516,789.763c-18-40-108-216-216-140c-100,94,2,146,40,226c40,104-18,210,118,210
                        C3678.516,1077.763,3626.516,829.763,3608.516,789.763z"/>

                    <!-- X Button -->
                    <path id="btnX" class="core" fill="#999999" d="M3595.318,797.151c-16.82-37.265-96.896-207.073-194.16-134.671
                        c-86.025,83.202,11.178,136.637,46.641,211.142c37.561,96.962-15.783,200.876,102.035,197.438
                        C3662.23,1062.171,3612.143,834.415,3595.318,797.151z"/>
                </g>
            </svg>';
}
?>
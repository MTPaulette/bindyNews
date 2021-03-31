module.exports = {
    module: {
      rules: [
        {
          test: /\.css$/i,
          use: [
            "handlebars-loader", // handlebars loader expects raw resource string
            "extract-loader",
            "css-loader",
          ],
        },
      ],
    },
  };
  Op
/* webpack
module.exports = {
    module: {
        rules: [
            {
                test: /\.css$/i,
                use: ["style-loader" , "css-loader"],
            },
        ],
    },
};
*/
/* vue
module.exports = {
    module: {
        rules: [
            {
                test: /\.css$/i,
                use: [
                    "vue-style-loader" ,
                    {
                        loader: "css-loader",
                        options: {
                            modules: true,
                        
                        }
                    }
                ]    
            }
        ]
    }
};


/* les deux
module.exports = {
    module: {
        rules: [
            {
                test: /\.css$/i,
                //use: ["style-loader" , "css-loader"],  
                use: [
                    //"vue-style-loader" ,
                    {
                        loader: "style-loader", 
                        options: {
                            modules: true,
                        
                        }
                    },

                    {
                        loader: "css-loader", 
                        options: {
                            modules: true,
                        
                        }
                    }
                ],
            },
        ],
    },
};
*/


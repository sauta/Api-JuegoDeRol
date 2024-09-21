#!/bin/bash

# Directorio donde están los modelos
MODEL_DIR="./app/Models"

# Recorre todos los archivos .php en el directorio de Modelos
for model in $MODEL_DIR/*.php; do
    # Extrae el nombre del modelo quitando el path y la extensión .php
    model_name=$(basename "$model" .php)

    # Genera el controlador para cada modelo
    php artisan make:controller "${model_name}Controller" --resource --model="App\\Models\\${model_name}"

    echo "Generado controlador para $model_name"
done

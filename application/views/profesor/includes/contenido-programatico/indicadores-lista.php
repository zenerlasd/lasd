    <?php $periodo = 1;?>
    <div id="listaIndicadores" class="col-md-12 divloaded" data-url="<?php echo site_url('profesor/getIndicador/' . $numeroClase); ?>">
        
        <?php foreach ($contenido_indicadores as $key => $indicador): ?>
            
            <?php if ($periodo != $indicador['periodo']): ?>
                <div class="well-lista row" style="margin-top: 26px;">  
                <?php $periodo = $indicador['periodo']; ?>
            <?php else: ?> 
             <div class="well-lista row" style="margin-top: 8px;">  
            <?php endif ?>
                                      
                    <div class="col-md-10 col-xs-9" id="">
                        <div class="btn-group pull-left" data-toggle="buttons" style="padding: 6px 0px;">
                            <label class="disabled btn btn-default btn-green btn-xs <?php if ($indicador['estado'] == 1) {echo 'active';} ?>">
                                <input class="" type="checkbox" name="options" id="option1" value="1" <?php if ($indicador['estado'] == 1) {echo 'checked';} ?>> 
                                <span class="fa fa-check"></span>
                            </label>
                        </div> 

                    <span class="truncate exampler" style="padding: 8px 5px;font-size: 13px;cursor:pointer;" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" 
                                    data-title="Descripción" data-content="<?php echo $indicador['contenido']; ?>">
                            <?php echo $indicador['contenido']; ?></span>
                    </div>
                    <div class="col-md-1 col-xs-2 col-md-clear" style="padding: 6px 0px;">
                       
                        <span id="" class="label label-<?php echo $indicador['periodo']; ?> icono truncate-min">
                            Periodo <?php echo $indicador['periodo']; ?>
                        </span>

                    </div> 

                    <div class="col-md-1 col-xs-1 col-md-clear hidden-xs" style="padding: 6px 0px;">
                        <?php if ($indicador['fecha_vencimiento'] != '0000-00-00'): ?>
                            <span class="label label-default icono exampler" data-container="body" data-toggle="popover" data-title="Fecha límite" data-trigger="hover" data-placement="bottom" 
                                    data-content="<?php echo $indicador['fecha_vencimiento']; ?>" style="cursor:pointer;"><i class="fa fa-clock-o"></i> <?php echo date("M d", strtotime($indicador['fecha_vencimiento'])); ?>
                            </span>
                        <?php endif ?>
                    </div>                        
            </div>

        <?php endforeach; ?>
    </div>

    <script>
        $('.exampler').popover();
    </script>
    <ul>
        <li>
            <label for="width">Width::.</label>
            <?php echo form_input('width', ($options['width'] != '' ? $options['width'] : '250')); ?>
        </li><li>
            <label for="height">Height::.</label>
            <?php echo form_input('height', ($options['height'] != '' ? $options['height'] : '250')); ?>
        </li><li>
            <label for="speed">Speed::.</label>
            <?php echo form_input('speed', ($options['speed'] != '' ? $options['speed'] : '0.05')); ?>
        </li><li>
            <label for="shape">Shape::.</label>
            <?php echo form_dropdown('shape', array('sphere'=>'Sphere','vcylinder'=>'Vcylinder','hcylinder'=>'Hcylinder'), $options['shape']); ?>
        </li><li>
            <label for="text_color">Text Color::.</label>
            <?php echo form_input('text_color', ($options['text_color'] != '' ? $options['text_color'] : '#000000')); ?>
        </li><li>
            <label for="outline_color">Outline Color::.</label>
            <?php echo form_input('outline_color', ($options['outline_color'] != '' ? $options['outline_color'] : '#000000')); ?>
        </li><li>
            <label for="shadow">Text Shadow Color::.</label>
            <?php echo form_input('shadow', ($options['shadow'] != '' ? $options['shadow'] : '#000000')); ?>
        </li>
    </ul>
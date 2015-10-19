<?php if(isset($this->_paginacion)): ?>

<?php if($this->_paginacion['primero']): ?>

<a href="<?php echo $link.$this->_paginacion['primero']; ?>">Primero</a>

<?php else: ?>

|<

<?php endif; ?>

&nbsp;

<?php if($this->_paginacion['anterior']): ?>

<a href="<?php echo $link.$this->_paginacion['anterior']; ?>"><<</a>

<?php else: ?>

<<

<?php endif; ?>

&nbsp;

<?php for($i=0; $i<count($this->_paginacion['rango']); $i++): ?>
    
    <?php if($this->_paginacion['actual'] == $this->_paginacion['rango'][$i]): ?>
    <?php echo $this->_paginacion['rango'][$i]; ?>
    <?php else: ?>
    <a href="<?php echo $link.$this->_paginacion['rango'][$i]; ?>">
        <?php echo $this->_paginacion['rango'][$i]; ?>
    </a>&nbsp;
    <?php endif; ?>

<?php endfor; ?>

&nbsp;

<?php if($this->_paginacion['siguiente']): ?>

<a href="<?php echo $link.$this->_paginacion['siguiente']; ?>">>></a>

<?php else: ?>

>>

<?php endif; ?>

&nbsp;

<?php if($this->_paginacion['ultimo']): ?>

<a href="<?php echo $link.$this->_paginacion['ultimo']; ?>">Ultimo</a>

<?php else: ?>

>|

<?php endif; ?>

<?php endif; ?>


